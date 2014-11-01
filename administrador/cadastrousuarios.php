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


//<!-- Fim do JavaScript que validará os campos obrigatórios! -->
<?php header('Content-type: text/html; charset=UTF-8'); ?>

</script>
</head>
<div class="jumbotron">
  <h1 style="color:#FFFFFF">Cadastro de Usuários</h1>
  <p style="color:#FFFFFF">Preencha as informações no formulário abaixo</p>
</div>
<form id="cadastro" name="cadastro" method="post" action="cadastro.php"> <!--  onsubmit="baixarLicitacao(); " -->
  <table width="625" border="0">
    <!-- <tr>
      <td>Natureza:</td>
      <td><input name="natureza" type="radio" value="Juridica" checked="checked" />
        Jurídica
        <input name="natureza" type="radio" value="Fisica" />
        Física <span class="style1">*</span> </td>
    </tr>
  -->
    <tr>
      <td width="69">CPF:</td>
      <td width="546"><input name="cpf" type="text" id="cpf" size="20" maxlength="60" onkeypress="return letras();" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td width="69">Primeiro nome:</td>
      <td width="546"><input name="pnome" type="text" id="pnome" size="20" maxlength="60" onkeypress="return letras();" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Ultimo nome:</td>
      <td><input name="unome" type="text" id="unome" size="40" maxlength="60" onkeypress="return letras();" />
      <span class="style1">*</span></td>
    </tr> 
    <tr>
      <td>E-mail:</td>
      <td><input name="email" type="text" id="email" maxlength="50" />
        <span class="style1">*</span></td>
    </tr>

    <tr>
      <td>Senha:</td>
      <td><input name="senha" type="text" id="senha" maxlength="50" />
        <span class="style1">*</span></td>
    </tr>

    <tr>
      <td>Tipo de usuário:</td>
      <td><select name="licitacao" id="licitacao">
        <option>Escolha uma tipo</option> 
        <option value="Usuário comum">Usuário comum</option>
        <option value="Moderador">Moderador</option>
        <option value="Professor">Moderador</option>

         </select>
        <span class="style1">*      </span></td>
    </tr>
    
    <tr>
      <td>SIAP:</td>
      <td><input name="SIAP" type="text" id="SIAP" maxlength="50" />
        <span class="style1">*</span></td>
    </tr>

        <tr>
      <td>Código de departamento:</td>
      <td><input name="codepto" type="text" id="codepto" maxlength="50" />
        <span class="style1">*</span></td>
    </tr>



     
    <tr>
      <td colspan="2"><p>
        <input name="baixar"  type="submit" id="baixarlicitacao" value="Confirmar" /> <!-- type="submit" --> 
        
          <input name="limpar" type="reset" id="limpar" value="Cancelar" />
          <br />
          <span class="style1">* Campos com * s&atilde;o obrigat&oacute;rios!          </span></p>
      <p>&nbsp; </p></td>
    </tr>
  </table>
</form>

<?php 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !

$pnome  = $_POST ["pnome"]; //atribuição do campo "nome" vindo do formulário para variavel  
$unome  = $_POST ["unome"]; //atribuição do campo "email" vindo do formulário para variavel
$email  = $_POST ["email"]; //atribuição do campo "ddd" vindo do formulário para variavel
$cpf  = $_POST ["cpf"];  //atribuição do campo "telefone" vindo do formulário para variavel
$senha  = $_POST ["senha"];  //atribuição do campo "endereco" vindo do formulário para variavel
$SIAP = $_POST ["SIAP"];  //atribuição do campo "cidade" vindo do formulário para variavel
$codepto  = $_POST ["codepto"];  //atribuição do campo "estado" vindo do formulário para variavel  //atribuição do campo "bairro" vindo do formulário para 
$tipo_usr = $_POST["professor"];


if( ((strcmp ($pnome, "") != 0) && (strcmp ($unome, "") != 0) && (strcmp ($email, "") != 0) && (strcmp ($cpf, "") != 0) && (strcmp ($senha, "") != 0) && (strcmp ($SIAP, "") != 0) && (strcmp ($coddepto, "") != 0) && ))
{

  $query = "INSERT INTO `usuarios` ( `cpf` , `pnome` , `unome`, `senha` , `email`) 
  VALUES ('$cpf', '$pnome', '$unome', '$senha', '$email')";
  
  if(mysql_query($query, $conexao))
{
  echo ("Os dados foram salvos com sucesso em nosso banco de dados");
}

else 
{
  echo("Houve erro no cadastro de usuário");
}

  if(strcmp($tipo_usr, "Professor") == 0 )
  {
      $query = "INSERT INTO `professor` ( `cod_depto` , `siap` , `cpf_prof`) 
    VALUES ('$cpf', '$SIAP', '$codepto')";
  
  }


}

if(mysql_query($query, $conexao))
{
  echo ("Os dados foram salvos com sucesso em nosso banco de dados");
}

else 
{
  echo("Houve erro no cadastro de usuário");
}
?>

</body>
</html>
