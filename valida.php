<?php

include("conexao.php");
include("erro.php");

$cpf = $_POST['cpf'];
$password = $_POST['password'];

$sql = mysql_query("SELECT PNOME, UNOME, SENHA FROM usuario WHERE CPF = $cpf");

$result = mysql_fetch_array($sql);
if ($password = $result[2]);
	echo $result[2];


	
	/*
	Moderador: SELECT COD_SETOR FROM MODERADOR, MODERA WHERE CPF_MOD=cpf AND CPF_MOD=CPF_USUARIO;
	
	Professor: SELECT SIAP, COD_DEPTO FROM PROFESSOR WHERE CPF_PROF=cpf;
	
	Administrador: SELECT COD_SETOR FROM MODERADOR JOIN MODERA ON CPF_MOD=CPF_USUARIO WHERE CPF_ADM=cpf;
	*/

include("close_conexao.php");

?>