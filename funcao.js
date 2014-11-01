function obtemData(data){
	if(data){
		var url="reservas.php?data="+data;
		requisicaoHTTP("GET",url,true);
	}
}

function trataDados(){
	var date = ajax.responseText;
	document.getElementById("date").innerHTML=date;
}