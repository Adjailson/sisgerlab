<?php
	if (($_SESSION['tipo'] != "Administrador")){
	  	header("Location: home");
	}

	$id = 0;
	// Precisamos pegar primeiro o valor do id:
	if (isset($_GET['id']) && !empty($_GET['id'])) {
		$id = addslashes($_GET['id']);
	}

	/*
  Verificar os campos e armazenar os valores;
  */
  if (isset($_POST["txtOpcao"]) &&
    isset($_POST["txtNome"]) && !empty($_POST["txtNome"]) &&
    isset($_POST["txtEmail"]) && !empty($_POST["txtEmail"]) &&
    isset($_POST["txtSituacao"]) && !empty($_POST["txtSituacao"])) {

    $txtFun = addslashes($_POST["txtOpcao"]);
    $txtNome = addslashes($_POST["txtNome"]);
    //$txtId = addslashes($_GET['id']);
    $txtEmail = addslashes($_POST['txtEmail']);
    $txtSit = addslashes($_POST["txtSituacao"]);

    /*
    Verificar se as senhas estão iguais e se box função foi selecionado;
    Se tudo ok, então insere os dados no banco.
    */
	  if($txtOpcao != "0"){
	    $usu = new Usuario();
	    $usu->setNome($txtNome);
	    $usu->setEmail($txtEmail);
	    $usu->setFuncao($txtFun);
	    $usu->setSituacao($txtSit);
	    $usu->editar($id);
	    
	    header("Location: admconfig");
	  }else{
	    echo "".Utilidades::mensagemErro("Selecione sua função!");
	    exit();
	  }
  }
	$usu = new Usuario();
	$dados2 = array();
	$dados2 = $usu->listarId($id);

?>
<div class="card">
  <div class="card-header">

    <h2>Edite dados</h2>
<form method="POST">

	<label class="my-1 mr-2 alert-link" for="inlineFormCustomSelectPref">Situação</label>
  <select class="custom-select my-1 mr-sm-2" name="txtSituacao">
      <option value="on">On</option>
      <option value="off">Off</option>
  </select>

  <label class="my-1 mr-2 alert-link" for="inlineFormCustomSelectPref">Sua função</label>
  <select class="custom-select my-1 mr-sm-2" name="txtOpcao">
      <option selected value="0">Selecione</option>
      <?php
      $func = new Funcao();
  	  $dados = array();
  	  $dados = $func->listar();
      foreach($dados as $row){
        echo "<option value='".$row['id']."'>".$row['funcao']."</option>";
      }
      ?>
  </select>

  <div class="form-row">
    <div class="col">
      <label for="exampleNome" class="alert-link">Nome</label>
      <?php echo "<input type='text' name='txtNome' class='form-control' value='".$dados2['nome']."'' required>"; ?>
    </div>

    <div class="col">
      <label for="exampleCpf" class="alert-link">CPF</label>
      <?php echo "<input type='text' maxlength='11' name='txtCpf' class='form-control' value='".$dados2['cpf']."' readonly>"; ?>
      <small id="emailHelp" class="form-text text-muted">Nós nunca vamos compartilhar seu CPF com mais ninguém.</small>
    </div>

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1" class="alert-link">Endereço de E-mail</label>
    <?php echo "<input type='email' name='txtEmail' class='form-control' value='".$dados2['email']."' required>"; ?>
    <small id="emailHelp" class="form-text text-muted">Nós nunca vamos compartilhar seu e-mail com mais ninguém.</small>
  </div>
  	<a href='admconfig' class='btn btn-danger'>Voltar</a>
    <button type="submit" class="btn btn-primary">Atualizar</button>

   <hr>

</form>

</div>
</div>