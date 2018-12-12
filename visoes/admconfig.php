<?php
  if (($_SESSION['tipo'] != "Administrador")){
    header("Location: home");
  }
?>

<h3><span class="badge badge-secondary">Gerenciar</span> Usuários</h3>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Funcao</th>
      <th scope="col">Status</th>
      <th scope="col">Operacao</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
      $fun = new Funcao();
      $cad = new Usuario();
      $dados = array();
      $dados = $cad->listar();
      foreach ($dados as $usu) {
        echo '<tr>';
        echo '<td>'.$usu['id'].'</td>';
        echo '<td>'.$usu['nome'].'</td>';
        echo '<td>'.$usu['email'].'</td>';
        echo '<td>'.$fun->getFun($usu['funcao']).'</td>';
        echo '<td>'.$usu['situacao'].'</td>';
        echo '<td>
          <a href="deleteusu?id='.$usu['id'].'" class="btn btn-danger">Excluir</a>
          <a href="editusu?id='.$usu['id'].'" class="btn btn-info">Editar</a> 
        </td>';
        echo "</tr>";
        }
    ?>
    </tr>
  </tbody>
</table>
