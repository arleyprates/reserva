<?php
session_start();
if (empty($_SESSION['user'])){
  header('location: ../index.html');
}
?>
//<!-- Fim do JavaScript que validará os campos obrigatórios! -->
<?php 
include('../conexao.php');
header('Content-type: text/html; charset=UTF-8'); 
?>


<?php 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !

$id  = $_POST ['nr_sala']; //atribuição do campo "nome" vindo do formulário para variavel  
$desc  = $_POST ['descricao']; //atribuição do campo "email" vindo do formulário para variavel

if((strcmp ($id, "") != 0) && (strcmp ($desc, "") != 0))
{

  $query = "INSERT INTO `tipos_de_sala` ( `id` , `desc`) 
  VALUES ('$id', '$desc')";
  
    $result = mysql_query($query, $conexao);

  if($result)
  {
    echo "Tipo de Sala cadastrada com sucesso!";
  }

  else 
  {
    echo mysql_error();
  }
}

?>

