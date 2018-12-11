<?php
// verificar um usuário logado
if (!empty($_SESSION['nome']) && !empty($_SESSION['tipo'])){
  header("Location: home");
}

if (isset($_POST['txtEmail']) && !empty($_POST['txtEmail']) && isset($_POST['txtSenha']) && !empty($_POST['txtSenha'])) {
  $email = addslashes($_POST['txtEmail']);
  $senha = md5(addslashes($_POST['txtSenha']));

  $usu = new Usuario();
  $dados = array();
  $func = new Funcao();
  
  $dados = $usu->login($email, $senha);
  $tipo = $func->getFun($dados['funcao']);
  $nome = $dados['nome'];
  $situacao = $dados['situacao'];


  if ((!empty($tipo)) && (!empty($nome))) {
    if ($situacao == "on") {
      // Guarda na sessao nome e a funcao desse usuário
      $_SESSION["nome"] = $nome;
      $_SESSION['tipo'] = $tipo;
      $_SESSION['id'] = $dados['id'];
      header("Location: home");
    } else {
      echo "".Utilidades::mensagemErro("Acesso não confirmado!");
      exit();
    }
    
  }else{
    echo "".Utilidades::mensagemErro("Dados inválidos!");
    exit();
  }
  
}
?>

<div class="card">
<div class="card-header">
  <h2>Login</h2>
<form method="POST" action="login">
  <div class="form-group">
    <label for="exampleInputEmail1" class="alert-link">Endereço de E-mail</label>
    <input type="email" class="form-control" name="txtEmail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter E-mail" required autofocus>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword" class="alert-link">Senha</label>
    <input type="password" class="form-control" name="txtSenha" id="exampleInputPassword1" placeholder="Senha" required>   
    <small id="emailHelp" class="form-text text-muted">Não tem Cadastro? Acesse: <a href="cadastro">Cadastro</a></small>
    <small id="emailHelp" class="form-text text-muted">Não lembra a senha? Acesse: <a href="recuperar">Esqueci a senha</a></small>
    
  </div>
    <button type="submit" class="btn btn-primary">Logar</button>
</form>
</div>
</div>