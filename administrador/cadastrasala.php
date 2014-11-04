<?php
session_start();
if (empty($_SESSION['user'])){
  header('location: ../index.html');
}

include('../conexao.php');
header('Content-type: text/html; charset=UTF-8'); 
header('Content-type:application/json'); 

$nsala = $_POST ['nsala'];
$csala = $_POST ['csala'];
$tsala = $_POST['tiposala'];
$srecurso = $_POST['recurso'];
//$srecurso = json_decode($array);
echo "aha!";
header('location: ../index.html');
//$srecurso = json_decode('success'=>true);
//$array = array_values($srecurso);
//echo 
//echo "<script>alert('aaa')</script>";
die;

if((strcmp ($nsala, "") != 0) && (strcmp ($csala, "") != 0) && (strcmp ($tsala, "") != 0)){
  $query = "INSERT INTO `sala` ( `nr_sala` , `capacidade`, `id_tipo_sala`) 
  VALUES ('$nsala', '$csala', '$tsala')";
  $result = mysql_query($query, $conexao);
  if($result){
    echo "Tipo de Sala cadastrada com sucesso!";
  }else{
    echo mysql_error();
  }/*
  while (FALTA UMA CONDICAO!){
    $sql = "INSERT INTO `utiliza` (`codigo_recurso`, `nr_sala`) VALUES ('$srecurso','$nsala')";
    if($sql){
      echo "Recurso Associado a sala";
    }else{
      echo mysql_error();
    }   
  }*/
}

?>