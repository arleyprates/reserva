<?php
session_start();
if (empty($_SESSION['user'])){
header('location: ../index.html');
}
include("header.php");
?>
<head>
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
<div class="container">
  <div class="jumbotron">
    <h1 style="color:#FFFFFF">Cadastro de Salas</h1>
    <p style="color:#FFFFFF">Preencha as informações no formulário abaixo</p>
  </div>
  <div class="container">
    <form method="post" action="" id="ajax_form">
      <table width="625">
        <tr>
          <td width="69">
            Número da sala:
          </td>
          <td width="546"><input id="nsala" type="text" size="20" maxlength="60" onkeypress="return numeros();" />
            <span class="style1">*</span>
          </td>
        </tr>
        <tr>
          <td width="69">Capacidade:</td>
          <td width="546">
            <input id="csala" type="text" size="20" maxlength="60" />
            <span class="style1">*</span>
          </td>
        </tr>
        <tr>
          <td>Tipo de Sala:</td>
          <td>
            <select id="tiposala">
              <option disabled>Escolha uma tipo</option>
              <option value="1">Laboratório de Aulas</option>
              <option value="2">Sala de Aula</option>
              <option value="3">Auditório</option>
            </select>
            <span class="style1">* </span>
          </td>
        </tr>
        <tr>
          <td>Setor</td>
          <td>
            <select id="setor">
              <option disabled>Escolha um setor</option>
              <?php
                include("../conexao.php");
                include("../erro.php");
                $sql = mysql_query("SELECT * FROM setor");
                while ($result = mysql_fetch_array($sql)){
                  printf ("<option value=\"$result[cod_setor]\">%s", $result['nome'], "</option>");
                }
                include("../close_conexao.php");
              ?>
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
                printf ("<option value=\"$result[codigo]\">%s", $result['nome'], "</option>");
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
      var nsala = $("#nsala").val();
      var csala = $("#csala").val();
      var tiposala = $("#tiposala").val();
      var setor = $("#setor").val();
      alert(setor);
      jQuery.ajax({
        type: "POST",
        dataType: "json",
        url: "cadastrasala.php",
        data: {recurso: item, nsala: nsala, csala: csala, tiposala: tiposala, setor: setor},
        success: function(item){
          alert("Success!");
        },
        erro: function(item) {
          alert("Erro n foi possivel Inserir");
        },
        statusCode: {
          200: function(){
            alert("Sucesso ao Inserir!");
            //window.location.reload(true);
          }
        }
      });
      return false;
    });
  });
</script>
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>