<?php
session_start();
if ($_SESSION['tipousuario'] != 0)
  echo "<script>alert('Usario sem permissao de ADM'); 
    window.location.replace('../logout.php');
    </script>";
if (empty($_SESSION['user'])){
  echo "<script>alert('Sessao encerrada usario incorreto'); 
    window.location.replace('../logout.php');
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Reserva de Sala</a>
          <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Setor <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="../setor-aula.html">Aula</a></li>
                <li><a href="../setor-aula.html">Laboratório</a></li>
                <li><a href="../setor-aula.html">Reunião</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastro <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="cadastrousuarios.php">Usuário</a></li>
                <li><a href="cadastrorecurso.php">Recurso</a></li>
                <li><a href="cadastrosala.php">Sala</a></li>
                <li><a href="cadastrotiposala.php">Tipo de Sala</a></li>
              </ul>
              <li><a href="moderacao.php"><span class="badge pull-right">42</span>Notificações</a></li>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
        </div>
        <div class="navbar-collapse collapse">
          <div class="navbar-collapse collapse navbar-right">
            <button type="submit" class="btn btn-warning"><a href="../logout.php">Logout</a></button>
        </div><!--/.navbar-collapse -->
        </div><!--/.navbar-collapse -->
      </div>
    </div>

  <div class="container">
    <div class="jumbotron">
      <div class="container">
        <div class="container">
        <h2>Solicitação de Reserva #1234</h2>
      </div>
      <div class="row">
        <div class="col-sm-6 blog-main">
          <div class="col-xs-12 col-sm-6 col-md-8">
              <p><h3>Setor Laboratório<h3><h4>Sala 101</h4> <h5>Laboratório</h5>
              </h5>Capacidade 40 Pessoas</h5>
          </div>
        </div>
        <div class="col-sm-6 blog-main">
          <div class="col-xs-12 col-sm-6 col-md-8">
              <h3>Recursos</h3>
              <h5>Piloto</h5>
              <h5>Controle Ar Condicionado</h5>
              <h5>Projetor</h5>
              <br>
          </div>
        </div>
      </div>
      <div class="col-sm-6 blog-main">
          <div class="col-xs-12 col-sm-6 col-md-8">
              <button type="button" class="btn btn-primary">Autorizar</button>
              <button type="button" class="btn btn-danger">Não Autorizar</button>
          </div>
        </div>
    </div>
  </div>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/jquery-1.11.1.min.js"></script>
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/docs.min.js"></script>
  </body>
</html>