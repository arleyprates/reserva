<?php
include ("conexao.php");
$gmtDate = gmdate("D, d M Y H:i:s");
header("Expires: {$gmtDate} GMT");
header("Last-Modified: {$gmtDate} GMT");
header("Cache-Control: no-cache, must-revalidade");
header("Pragma: no-cache");
$data = $_GET["data"];
$codsetor = $_GET["setor"];
$res = mysqli_query($conexao,"SELECT horario_abertura, horario_encerramento FROM setor WHERE cod_setor=$codsetor");
$total = mysqli_num_rows($res);
$encerramento;
$abertura;
for($i=0;$i<$total;$i++){
	$dados = mysqli_fetch_row($res);
    $abertura = $dados[0];
    $encerramento = $dados[1];
                
}
$a = explode(":", $abertura);
$e = explode(":", $encerramento);

$sala;
$res = mysqli_query($conexao,"SELECT id_sala FROM gerencia WHERE cod_setorg=$codsetor");
$total = mysqli_num_rows($res);
for($i=0;$i<$total;$i++){
	$sala = mysqli_fetch_row($res);
                   
}
$tabela;
for($i=$a[0];$i<$e[0];$i++){
	foreach ($sala as $s) {
		$tabela[$i][$s]="livre";
	}
}
foreach ($sala as $s) {
	
	$res = mysqli_query($conexao,"SELECT horario_inicio , horario_fim, pnome FROM  reserva, usuario WHERE data_reserva='$data' AND num_sala=$s AND cpf_usr=cpf ORDER BY horario_inicio");
	$total = mysqli_num_rows($res);
	for($i=0;$i<$total;$i++){
		$dados = mysqli_fetch_row($res);
		$inicio= explode(":", $dados[0]);
		$fim= explode(":", $dados[1]);
		$username=$dados[2];
		$dif=$fim-$inicio;
		$aux=$inicio;
		while($dif>0){
			$tabela[$aux][$s]=$username;
			$aux++;
			$dif--;

		}

	}
}
echo "<table class=\"table\">";
echo " <thead>";
echo "  <tr>";
echo "   <th>Hora</th>";
foreach ($sala as $s) {
	echo "   <th>sala $s</th>";
}
echo "  </tr>";
echo " </thead>";
echo " <tbody>";
$tabela;
for($i=$a[0];$i<$e[0];$i++){
	echo "  <tr>";
	echo "   <td>$i</td>";
	foreach ($sala as $s) {
		if($tabela[$i][$s] == "livre"){
			echo "   <td><a href=\"solicita-reserva.html\">reserve</a></td>";
		}else{
			echo "   <td>$tabela[$i][$s]</td>";
		}
	}
	echo "  </tr>";
}
echo " </tbody>";
echo "</table>";
?>