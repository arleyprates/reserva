<?php

include("../conexao.php");

header('Content-type: text/html; charset=UTF-8'); 

$busca = $_GET['buscarsala'];
$tipo = $_GET['criterio'];


	if(strcmp($tipo, "Numero") == 0)
	{
		$sql = mysql_query("SELECT * FROM sala WHERE sala.nr_sala = $busca");
	    $result = mysql_fetch_array($sql);
		if($result)
		{
            echo "Número da sala: $result[0]";
			echo "</br>";
			echo "Capacidade: $result[1] alunos";
			echo "</br>";
			echo "Tipo de Sala: $result[2]";
			echo "</br>";
		}
        else
        {
            mysql_error();
        }
	}

	else if(strcmp($tipo, "Setor") == 0)
	{

		$sql = mysql_query("SELECT * FROM gerencia LEFT JOIN (sala, setor) on (gerencia.id_sala = sala.nr_sala and gerencia.cod_setorg = setor.cod_setor)" );
		while ($row = mysql_fetch_array($sql))
	{
        if(strcmp($row['nome'], utf8_decode($busca)) == 0) 
    	{	
    		//echo $row[6];
            echo "</br>";
            echo "Nome do Setor: ". $row['nome'];
            echo "</br>";
    		echo "Número da sala: ". $row['nr_sala'];
            echo "</br>";
    		echo "Capacidade de ". $row['capacidade'] . " alunos";
            echo "</br>";
    	 }

         else if(strcmp("", $busca) == 0)
         {
            echo "</br>";
            echo "Nome do Setor: ". $row['nome'];
            echo "</br>";
            echo "Número da sala: ". $row['nr_sala'];
            echo "</br>";
            echo "Capacidade de ". $row['capacidade'] . " alunos";
            echo "</br>";  
         }
	   }
	}
	else if(strcmp($tipo, "Tipo") == 0)
	{
		
        $sql = mysql_query("SELECT * FROM sala, tipos_de_sala WHERE sala.id_tipo_sala = tipos_de_sala.id");
		//$result  = mysql_fetch_array($sql);
        //echo mysql_error();
     while ($row = mysql_fetch_array($sql))
    {
        if(strcmp($row['desc'], utf8_decode($busca)) == 0)
    	{	
            echo "</br>";
            echo "Tipo de sala: ". utf8_encode($row['desc']);
    		echo "</br>";
            echo "Numero da sala: ". $row['nr_sala'];
    		echo "</br>";
            echo "Capacidade: ". $row['capacidade'] ." alunos";
            echo "</br>";
    	 }
         else 
         {
            if (strcmp("", $busca) == 0)
            {
                echo "</br>";
                echo "Tipo de sala: ". utf8_encode($row['desc']);
                echo "</br>";
                echo "Numero da sala: ". $row['nr_sala'];
                echo "</br>";
                echo "Capacidade: ". $row['capacidade'] ." alunos";
                echo "</br>";      
            }
         }
	   }
       	
	}


?>

