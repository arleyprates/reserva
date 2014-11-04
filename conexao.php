<?php 


include('erro.php');

$servidor = 'localhost';
$usuario = 'root';
$senha = '123';
$banco = 'siges';

if($conexao = mysql_connect($servidor, $usuario, $senha)){
	mysql_select_db($banco, $conexao);
}else {
	echo "Nao foi possivel conectar com o servidor";
}

?>
