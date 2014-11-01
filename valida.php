<?php

include("conexao.php");
include("erro.php");

$cpf = $_POST['cpf'];
$password = $_POST['password'];

$sql = mysql_query("SELECT PNOME, UNOME, SENHA FROM usuario WHERE CPF = $cpf");
$result = mysql_fetch_array($sql);
	if ($password == $result[2]){
		echo $result[2];
		$sqlmodera = mysql_query("SELECT cpf_mod FROM moderador WHERE CPF_mod = $cpf");
		$result = mysql_fetch_array($sqlmodera);
		if ($cpf == $result[0]) {
			header("location: moderacao.php");
		}
	}
	/*
	Moderador: SELECT COD_SETOR FROM MODERADOR, MODERA WHERE CPF_MOD=cpf AND CPF_MOD=CPF_USUARIO;
	
	Professor: SELECT SIAP, COD_DEPTO FROM PROFESSOR WHERE CPF_PROF=cpf;
	
	Administrador: SELECT COD_SETOR FROM MODERADOR JOIN MODERA ON CPF_MOD=CPF_USUARIO WHERE CPF_ADM=cpf;
	*/

include("close_conexao.php");

?>