<?php 


include('erro.php');

$servidor = '192.168.141.94';
$usuario = 'root';
$senha = '123';
$banco = 'siges';

if($conexao = mysql_connect($servidor, $usuario, $senha))

{
	echo "Conexão feita com sucesso!!";
}

else
{

	echo "Não foi possivel conectar ao banco de dados";
} 

?>