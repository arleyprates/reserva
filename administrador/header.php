<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="favicon.ico">
<title>Cadastro de usuários</title>
<!-- Bootstrap core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<script src="../js/jquery-1.11.1.min.js" ></script>
<style rel="stylesheet" type="text/css">
SELECT, INPUT[type="text"] {
width: 160px;
box-sizing: border-box;
}
SECTION {
padding: 8px;
background-color: #f0f0f0;
overflow: auto;
}
SECTION > DIV {
float: left;
padding: 4px;
}
SECTION > DIV + DIV {
width: 40px;
text-align: center;
}
</style>
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
              <?php
                include("../conexao.php");
                include("../erro.php");
                $sql = mysql_query("SELECT * FROM setor");
                while ($result = mysql_fetch_array($sql)){
                  printf("<li><a href='%s.php'>", $result['cod_setor']);
                  printf("%s", $result['nome']);
                  printf("</a></li>");
                  //printf ("<li><a href=\"%s.php\">%s</a></li>", $result['nome']);
                }
                include("../close_conexao.php");
              ?>
</ul>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Gerência <span class="caret"></span></a>
<ul class="dropdown-menu" role="menu">

  <li role="presentation" class="dropdown-header">Usuário
    <li><a href="cadastrousuarios.php">Cadastrar</a></li>
    <li><a href="#">Listar</a></li>
    <li><a href="#">Alterar</a></li>
    <li><a href="#">Apagar</a></li>
  </li>
  <li role="presentation" class="dropdown-header">Recurso
    <li><a href="cadastrorecurso.php">Cadastro</a></li>
    <li><a href="#">Listar</a></li>
    <li><a href="#">Alterar</a></li>
    <li><a href="#">Apagar</a></li>
  </li>
  <li role="presentation" class="dropdown-header">Sala
    <li><a href="cadastrosala.php">Cadastro</a></li>
    <li><a href="listarsalas.php">Listar</a></li>
    <li><a href="#">Alterar</a></li>
    <li><a href="removesala.php">Apagar</a></li>
  </li>
  <li role="presentation" class="dropdown-header">Tipo de Sala
    <li><a href="cadastrotiposala.php">Cadastro</a></li>
    <li><a href="#">Listar</a></li>
    <li><a href="#">Alterar</a></li>
    <li><a href="#">Apagar</a></li>
  </li>
  <li role="presentation" class="dropdown-header">Setor
    <li><a href="cadastrosetor.php">Cadastro</a></li>
    <li><a href="#">Listar</a></li>
    <li><a href="#">Alterar</a></li>
    <li><a href="#">Apagar</a></li>
  </li>
  </ul>
<li><a href="reservaspendentes.php"><span class="badge pull-right">42</span>Notificações</a></li>
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
<!-- BEGIN CONTEUDOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO        -->

<!-- END   CONTEUDOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO        -->