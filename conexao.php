<?php 


include('erro.php');

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'siges';

if($conexao = mysql_connect($servidor, $usuario, $senha)){
	echo "Conexao feita com sucesso!!";
	mysql_select_db($banco, $conexao);
}else {
	echo "Nao foi possivel conectar com o servidor";
}

?>