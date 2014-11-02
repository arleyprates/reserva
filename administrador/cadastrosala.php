<?php
session_start();
if (empty($_SESSION['user'])){
  header('location: ../index.html');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type: content=text/html; charset=ISO-8859-1" />
<title>Cadastro de usuários</title>

<!--
<style type="text/css">

.style1 {
  color: #FF0000;
  font-size: x-small;
}
.style3 {color: #0000FF; font-size: x-small; }

</style>
-->
<link href="../css/bootstrap.min.css" rel="stylesheet">
<script src="../js/jquery-1.11.1.min.js" type="text/javascript"></script>  


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
    }
    else{  
       return true;  
    }  
}  


</script>
</head>
<div class="jumbotron">
  <h1 style="color:#FFFFFF">Cadastro de Salas</h1>
  <p style="color:#FFFFFF">Preencha as informações no formulário abaixo</p>
</div>
<form id="cadastro" name="cadastro" method="post" action="cadastrasala.php"> <!--  onsubmit="baixarLicitacao(); " -->
  <table width="625" border="0">
    <tr>
      <td width="69">Número da sala:</td>
      <td width="546"><input name="nr_sala" type="text" id="nr_sala" size="20" maxlength="60" onkeypress="return numeros();" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td width="69">Capacidade:</td>
      <td width="546"><input name="capacidade" type="text" id="capacidade" size="20" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Tipo de Sala:</td>
      <td><select name="tipodesala" id="tipodesala">
        <option>Escolha uma tipo</option> 
        <option value="1">Laboratório de Aulas</option>
        <option value="2">Sala de Aula</option>
        <option value="3">Auditório</option>

         </select>
        <span class="style1">*      </span></td>
    </tr>
  
      <td colspan="2"><p>
        <input name="baixar"  type="submit" id="baixarlicitacao" value="Confirmar" /> <!-- type="submit" --> 
        
          <input name="limpar" type="reset" id="limpar" value="Cancelar" />
          <br />
          <span class="style1">* Campos com * s&atilde;o obrigat&oacute;rios!          </span></p>
      <p>&nbsp; </p></td>
    </tr>
  </table>
</form>
</body>
</html>
