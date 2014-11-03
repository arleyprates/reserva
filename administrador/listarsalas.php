<?php

function tipoBusca()
{
	if(strcmp($tipo, "Numero"))
	{
		$sql = mysql_query("SELECT nr_sala, capacidade, id_tipo_sala FROM sala WHERE nr_sala = $nr");
		$result = mysql_fetch_array($sql);
		if($result)
		{
			echo "$result[0]";
			echo "</br>";
			echo "$result[1]";
			echo "</br>";
			echo "$result[2]";
			echo "</br>";
		}
	}

	else if(strcmp($tipo, "Setor"))
	{
		$sql = mysql_query("SELECT nr_sala, capacidade, id_tipo_sala FROM sala" );
		while ($result = mysql_fetch_array($sql))
	{
    	if(strcmp($result['descrição'], $tipo))
    	{	
    		echo $result['descrição'];
    		echo $result['nr_sala'];
    		echo $result['capacidade'];
    	 }
	   }
	}
	else if(strcmp($tipo, "Tipo de sala"))
	{
		$sql = mysql_query("SELECT nr_sala, capacidade, id_tipo_sala FROM sala" );
		while ($result = mysql_fetch_array($sql))
	{
    	if(strcmp($result['descrição'], $tipo))
    	{	
    		echo $result['descrição'];
    		echo $result['nr_sala'];
    		echo $result['capacidade'];
    	 }
	   }	
	}
}

?>

echo "Nome: ". $row['nome'];
    echo  "<br>";
    echo "CPF/CNPJ: ". $row['cpfcnpj'];
    echo "<br>";
    echo "Natureza: " . $row['natureza'];
    echo "<br>";
    echo "Endereco: " . $row['endereco'];
    echo "<br>";
    echo "Estado: ". $row['estado'];
    echo "<br>";
    echo "DDD: ". $row['ddd'];
    echo "<br>";
    echo "Telefone: ". $row['telefone'];
    echo "<br>";
    echo "Licitacao escolhida: ". $row['licitacao'];
    echo "<br>";
    echo "Data: ". $row['data'];
    echo "<br>";
    echo "Hora: ". $row['hora'];
    echo "<br>";
    echo "<br>";