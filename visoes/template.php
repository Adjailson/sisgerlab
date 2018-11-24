<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8"/>
  <link rel="shortcut icon" type="image/x-icon" href="http://localhost/sisgerlab/favicon.ico"/>
  <meta name="description" content="Sobre o SisGerLab."/>
  <meta name="Keywords" content="SisGerLab, sislerlab, lab"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <meta id="viewport" name="viewport" content="width=device-width, user-scalable=no"/>

  <meta name="robots" content="index,follow"/>
  <meta name="author" content="Sisgerlab."/>

  <meta property="og:image" content="http://localhost/assets/img/sisgerlab.jpg">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="400"> 
  <meta property="og:image:height" content="280">

  <title>Sisgerlab</title>

  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>assets/css/sisgerlab.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>assets/css/bootstrap.css">

</head>
<body>

<div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
  <img class="navbar-brand" src="<?php echo BASE_URL ?>assets/img/logotipo.png" width="110px" height="90px"/>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home">Home <span class="sr-only"></span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="reserva">Reserva <span class="sr-only"></span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="contato">Contato <span class="sr-only"></span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="sobre">Sobre <span class="sr-only"></span></a>
      </li>

    </ul>

    <li class="form-inline my-2 my-lg-0">
      <a class="btn btn-outline-success my-2 my-sm-0" href="login">Login <span class="sr-only"></span></a>
    </li>
  </div>
</nav>
</div>


<div class="container">
  <?php $this->loadViewInTemplate($nomePagina, $dadosPagina) ?>
</div>

<div class="container">
<footer>
  <p>&copy;2018 <a href="/sisgerlab">Sisgerlab.</a> Todos os direitos reservados</p>

  <div>Icons made by <a href="https://www.flaticon.com/authors/gregor-cresnar" title="Gregor Cresnar">Gregor Cresnar</a> from <a href="https://www.flaticon.com/"           title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"          title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>

</footer>
</div>  

<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/bootstrap.js"></script>

</body>
</html>