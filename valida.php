<?php
include("conexao.php");
include("erro.php");

$cpf = $_POST['cpf'];
$password = $_POST['password'];

$sql = mysql_query("SELECT PNOME, UNOME, SENHA FROM usuario WHERE CPF = $cpf");
$result = mysql_fetch_array($sql);
	if ($password == $result[2]){
		$sqlmodera = mysql_query("SELECT cpf_mod FROM moderador WHERE CPF_mod = $cpf");
		$result = mysql_fetch_array($sqlmodera);
		if ($cpf == $result[0]){
			header("location: moderacao.php");
		}
		$sqlprofessor = mysql_query("SELECT cpf_prof FROM professor WHERE CPf_prof = $cpf");
		$result = mysql_fetch_array($sqlprofessor);
		if ($cpf == $result[0]){
			header("location: professor.php");
		}
		$sqladm = mysql_query("SELECT cpf_adm FROM moderador WHERE cpf_adm = $cpf");
		$result = mysql_fetch_array($sqladm);
		if ($cpf == $result[0]){
			header("location: adm.php");
		}
		//header("location: user.php");
	}else {
		echo "<script>alert('Usuario e Senha Invalida(o)');
		window.location.replace('login.html');
		</script>";
	}
include("close_conexao.php");
?>