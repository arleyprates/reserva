<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Web application for booking meeting rooms</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
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
  function validaCampo(){
    if(document.cadastro.noraz.value==""){
      alert("O Campo nome ou Razão Social é obrigatório!");
      return false;
    }else
      if(document.cadastro.email.value==""){
        alert("O Campo email é obrigatório!");
        return false;
      }else
        if(document.cadastro.endereco.value==""){
          alert("O Campo endereço é obrigatório!");
          return false;
        }else
          if(document.cadastro.cidade.value==""){
          alert("O Campo Cidade é obrigatório!");
          return false;
          }else
            if(document.cadastro.estado.value==""){
              alert("O Campo Estado é obrigatório!");
              return false;
            }else
              if(document.cadastro.cpfcnpj.value==""){
                alert("O Campo Bairro é obrigatório!");
                return false;
              }else
                if(document.cadastro.ddd.value==""){
                  alert("O Campo DDD é obrigatório!");
                  return false;
                }else
                  if(document.cadastro.telefone.value==""){
                    alert("O Campo Telefone é obrigatório!");
                    return false;
                  }else
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
                <li><a href="cadastrosetor.php">Setor</a></li>
              </ul>
              <li><a href="moderacao.php"><span class="badge pull-right">42</span>Notificações</a></li>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
        </div>
        <div class="navbar-collapse collapse">
          <div class="navbar-collapse collapse navbar-right">
            <a href="../logout.php"><button type="submit" class="btn btn-warning">Logout</button></a>
        </div><!--/.navbar-collapse -->
        </div><!--/.navbar-collapse -->
      </div>
    </div>
<!-- BEGIN CONTEUDOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO        -->

<!-- END   CONTEUDOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO        -->