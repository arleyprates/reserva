<?php 

$servidor = "http://192.168.141.94";
$usuario = "root";
$senha = "123"
$banco = "siges";

if($conexao = mysqli_connect($servidor, $usuario, $senha, $banco))
{
	echo "Conexão feita com sucesso!!";
}

else 
{
	echo "Não foi possível conectar com o servidor";
}

mysqli_close($conexao);
