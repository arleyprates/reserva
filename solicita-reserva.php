<?php
$numsala = $_GET['sala'];
$data = $_GET['data'];
include("conexao.php");
echo $numsala;
$res = array();
$res = mysql_query("SELECT * FROM `sala`, `tipos_de_sala` WHERE `id_tipo_sala` = `id` and `nr_sala` = '$numsala';");
$dadosSala = mysql_fetch_array($res);


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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

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
          <a class="navbar-brand" href="index.html">Reserva de Sala</a>
        </div>
            <div class="navbar-collapse collapse navbar-right">
                <button type="submit" class="btn btn-warning">Logout</button>
            </div><!--/.navbar-collapse -->
    </div>
  </div>
  <div class="container">
    <div class="jumbotron">
      <div class="container">
        <h2>Solicitação de Reserva</h2>
      </div>
      <div class="row">
        <div class="col-sm-6 blog-main">
          <div class="col-xs-12 col-sm-6 col-md-8">
              <p><h3>Sala: <?php echo $dadosSala['nr_sala']; ?></h4> <h5>Tipo: <?php echo utf8_encode($dadosSala['desc']); ?></h5>
              </h5>Capacidade <?php echo $dadosSala['capacidade']; ?> pessoas</h5>
          </div>
        </div>
        <div class="col-sm-6 blog-main">
          <div class="col-xs-12 col-sm-6 col-md-8">
              <h3>Recursos</h3>
              <?php
              $sql = mysql_query("SELECT `nr_sala`, `nome`, `categoria` FROM utiliza LEFT JOIN (sala, recurso) on (utiliza.numero_sala = sala.nr_sala and utiliza.codigo_recurso = recurso.codigo) WHERE `numero_sala` = '$numsala'");
               while($dados = mysql_fetch_array($sql))
                {
                  $nome = $dados[1];
                  $nomecorreto = utf8_encode($nome);
                  $categoria = $dados[2];
                  $nomecorreto2 = utf8_encode($categoria);
                  echo "  <option  value=\"$nome\">$dados[0] - $nomecorreto - $nomecorreto2</option>";
                }

              ?>
              <br>
          </div>
        </div>
        <div class="col-sm-6 blog-main">
          <div class="col-xs-12 col-sm-6 col-md-8">
              <div class="row">
                <div class="col-lg-6">
                  <div class="input-group">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Repetição <span class="caret"></span></button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Diariamente</a></li>
                        <li><a href="#">Mensalmente</a></li>
                        <li><a href="#">Semestralmente</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Único</a></li>
                      </ul>
                    </div><!-- /btn-group -->
                  </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
              </div><!-- /.row -->
              <div class="input-group">
                 <form id="reservar" method="post" <?php echo "action=\"reservasala.php?numsala=$numsala&data=$data\""; ?> >
                <span class="input-group-addon">Horário Início</span>
                <input type="text" class="form-control" placeholder="18:30" name="Inicio" id="horaInicio" /> <!-- problema aqui!! -->
              </div>
              <div class="input-group">
                <span class="input-group-addon">Horário Fim</span>
                <input type="text" class="form-control" placeholder="20:30" name="Fim" id="horaFim" />
              </div>
            
          </div>
        </div> 

        <div class="col-sm-6 blog-main">
          <div class="col-xs-12 col-sm-6 col-md-8">
              <button type="submit" class="btn btn-primary">Reservar</button>
              <button type="button" class="btn btn-danger">Cancelar</button>
          </div>
        </div>
       </form>
      </div>


    </div>
  </div>



    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>