<?php
session_start();
if (empty($_SESSION['user'])){
  header('location: ../index.html');
}
include("header.php");
?>
<div class="container">
<div class="jumbotron">
  <h1 style="color:#FFFFFF">Cadastro de Recurso</h1>
  <p style="color:#FFFFFF">Preencha as informações no formulário abaixo</p>
</div>
<form id="cadastro" name="cadastro" method="post" action="cadastrarecurso.php"> <!--  onsubmit="baixarLicitacao(); " -->
  <table width="625" border="0">
    <tr>
      <td width="69">Código do recurso:</td>
      <td width="546"><input name="codigo" type="text" id="codigo" size="20" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td width="69">Nome:</td>
      <td width="546"><input name="nome" type="text" id="nome" size="20" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td width="69">Categoria:</td>
      <td width="546"><input name="categoria" type="text" id="categoria" size="20" maxlength="60" />
        <span class="style1">*</span></td>
      </tr>  
  
    <tr>
      <td width="69">Situação:</td>
      <td width="546"><input name="situacao" type="text" id="situacao" size="20" maxlength="60" />
        <span class="style1">*</span></td>
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
</div>
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
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
