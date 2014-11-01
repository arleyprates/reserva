<?php 

$servidor = '192.168.141.94';
$usuario = 'root';
$senha = '123';
//$banco = "siges";
$conexao = mysql_connect($servidor, $usuario, $senha);

if($conexao)
{
	echo "Conexão feita com sucesso!!";
}

$banco = mysql_select_db('siges', $conexao);

if($banco)
{
	echo "Conexão feita com sucesso";
}
else
{

	echo "Não foi possivel conectar ao banco de dados";
} 

mysql_close($conexao);
