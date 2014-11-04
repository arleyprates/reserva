<?php
//selecionar email de moderadores que moderam setor de sala 
//que foi solicitada pelo usuário
// select setor da sala -> select moderadores do setor 
// -> select email de user de mesmo cpf do moderador
//
require("conexao.php");
$idsalassolicitada= '10';

$query1= mysql_query ("SELECT cod_setorg FROM gerencia WHERE id_sala=$idsalassolicitada");
$codigosetor= mysql_fetch_array($query1);
//print_r($codigosetor);

$query2= mysql_query("SELECT cpf_usuario FROM modera WHERE cod_setor='1'"); 
//IN (SELECT cod_setorg FROM gerencia WHERE id_sala=$idsalassolicitada)");

while ($moderadoressetor= mysql_fetch_array($query2)){
$array[]=$moderadoressetor;
//print_r($moderadoressetor);
}
print_r($array);
$query3= mysql_query("SELECT email FROM usuario WHERE cpf IN (SELECT cpf_usuario FROM modera WHERE cod_setor=(SELECT cod_setorg FROM gerencia WHERE id_sala=$idsalassolicitada))");
$emailsmod= mysql_fetch_array($query3);
//print_r($emailsmod);

/*
$to      = 'brsdcc@gmail.com';
$subject = 'TEST php';
$message = 'hello test php';
$headers = 'From: brsdcc@gmail.com' . "\r\n" .
    'Reply-To: brsdcc@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
*/
?> 
