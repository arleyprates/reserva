<?php
session_start();
if (empty($_SESSION['user'])){
header('location: ../index.html');
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
<title>Cadastro de usuários</title>
<!-- Bootstrap core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="../signin.css" rel="stylesheet">
<script src="../js/ie-emulation-modes-warning.js"></script>
<script src="../js/jquery-1.11.1.min.js" ></script>
<!--
<style type="text/css">
.style1 {
color: #FF0000;
font-size: x-small;
}
.style3 {color: #0000FF; font-size: x-small; }
</style>
-->
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
<script type="text/javascript">
  function validaCampo()
  {
  if(document.cadastro.noraz.value=="")
  {
  alert("O Campo nome ou Razão Social é obrigatório!");
  return false;
  }
  else
  if(document.cadastro.email.value=="")
  {
  alert("O Campo email é obrigatório!");
  return false;
  }
  else
  if(document.cadastro.endereco.value=="")
  {
  alert("O Campo endereço é obrigatório!");
  return false;
  }
  else
  if(document.cadastro.cidade.value=="")
  {
  alert("O Campo Cidade é obrigatório!");
  return false;
  }
  else
  if(document.cadastro.estado.value=="")
  {
  alert("O Campo Estado é obrigatório!");
  return false;
  }
  else
  if(document.cadastro.cpfcnpj.value=="")
  {
  alert("O Campo Bairro é obrigatório!");
  return false;
  }
  else
  if(document.cadastro.ddd.value=="")
  {
  alert("O Campo DDD é obrigatório!");
  return false;
  }
  else
  if(document.cadastro.telefone.value=="")
  {
  alert("O Campo Telefone é obrigatório!");
  return false;
  }
  else
  return true;
  }
  function letras(){
  tecla = event.keyCode;
  if (tecla >= 48 && tecla <= 57){
  alert("Digite apenas caracteres neste campo");
  return false;
  }else{
  return true;
  }
  }
  function numeros(){
    tecla = event.keyCode;
    if ((tecla >= 65 && tecla <= 90) || (tecla >= 97 && tecla <=122)) {
      alert("Digite apenas números neste campo");
      return false;
    }else{
     return true;
    }
  }
  
</script>
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
    <h1 style="color:#FFFFFF">Cadastro de Salas</h1>
    <p style="color:#FFFFFF">Preencha as informações no formulário abaixo</p>
  </div>
  <div class="container">

  <form action="cadastrasala.php">
    Envia Qualquer coisa: <input type="text" name="nome">
    <input type="submit" value="Envia">
  </form>

    <form method="post" action="cadastrasala.php">
      <table width="625">
        <tr>
          <td width="69">
            Número da sala:
          </td>
          <td width="546"><input name="nsala" type="text" size="20" maxlength="60" onkeypress="return numeros();" />
            <span class="style1">*</span>
          </td>
        </tr>
        <tr>
          <td width="69">Capacidade:</td>
          <td width="546">
            <input name="csala" type="text" size="20" maxlength="60" />
            <span class="style1">*</span>
          </td>
        </tr>
        <tr>
          <td>Tipo de Sala:</td>
          <td>
            <select name="tiposala">
              <option disabled>Escolha uma tipo</option>
              <option value="1">Laboratório de Aulas</option>
              <option value="2">Sala de Aula</option>
              <option value="3">Auditório</option>
            </select>
            <span class="style1">* </span>
          </td>
        </tr>
      </table>
      <section class="container">
        <div>
          <select id="leftValues" size="5" multiple></select>
        </div>
        <div>
          <input type="button" id="btnLeft" value="&lt;&lt;" />
          <input type="button" id="btnRight" value="&gt;&gt;" />
        </div>
        <div>
          <select id="rightValues" size="5" multiple>
            <?php
              include("../conexao.php");
              include("../erro.php");
              $sql = mysql_query("SELECT * FROM recurso");
              while ($result = mysql_fetch_array($sql)){
                printf ("<option value=\"$result[nome]\">%s", $result['nome'], "</option>");
              }
              include("../close_conexao.php");
            ?>
          </select>
        </div>
      </section>
      <p>
        <input name="baixar" type="submit" id="baixarlicitacao" value="Confirmar">
        <input name="limpar" type="reset" id="limpar" value="Cancelar">
        <span class="style1">* Campos com * s&atilde;o obrigat&oacute;rios! </span>
      </p>
    </form>
  </div>
</div>
<script>
  $( "#btnLeft" ).click(function(){
  var selectedItem = $("#rightValues option:selected");
  $("#leftValues").append(selectedItem);
  });
  $( "#btnRight" ).click(function () {
  var selectedItem = $("#leftValues option:selected");
  $("#rightValues").append(selectedItem);
  });
  $( "#rightValues" ).change(function () {
  var selectedItem = $("#rightValues option:selected");
  $("#txtRight").val(selectedItem.text());
  });
  jQuery(document).ready(function() {
    jQuery("#baixarlicitacao").click(function(e) {
      var item = $("#leftValues").val();
      alert(item);
      jQuery.ajax({
        type: "POST",
        dataType: "json",
        url: "cadastrasala.php",
        data: {recurso: item},
        //data: "name=\"item\"" + item,
        success: function(item){
          alert("success");
        },
        erro: function(item) {
          alert("erro");
        },
        statusCode: {
          200: function(){
            alert("sucesso!! " + item);
          }
        }
      });
      return false;
    });
  });
</script>
<script src="../js/ie10-viewport-bug-workaround.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/docs.min.js"></script>
</body>
</html>