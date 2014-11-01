<?php 

include('erro.php');

$servidor = '192.168.141.94';
$usuario = 'root';
$senha = '123';
$banco = 'siges';

if($conexao = mysql_connect($servidor, $usuario, $senha))
{
	echo "Conexao feita com sucesso!!";
	mysql_select_db($banco, $conexao);
}

else 
{
	echo "Nao foi possivel conectar com o servidor";
}

?>