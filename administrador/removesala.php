<?php header('Content-type: text/html; charset=UTF-8'); ?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- <meta http-equiv="Content-Type: content=text/html; charset=UTF-8" /> -->
<title>Cadastro de usuários</title>

<link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="jumbotron">
  <h1 style="color:#FFFFFF">Remoção de Sala</h1>
  <!--<p style="color:#FFFFFF"></p> -->
</div>
<form action="listarsalas.php" method="get">
<tr>
      <td width="69">Dado da sala:</td>
      <td width="546"><input name="buscarsala" type="text" id="buscarsala" size="20" maxlength="60" onclick="" />
      <p><p><td>Critério: <select name="criterio" id="criterio">
        <option>Escolha uma tipo</option> 
        <option value="Numero">Número de sala</option>
        <option value="Setor">Setor</option>
        <option value="Tipo">Tipo de Sala</option>
         </select></p></p>
  </td>
      
       <input name="confirmar"  type="submit" id="confirm" value="Confirmar" />

</tr>
</form>

</body>
</html>