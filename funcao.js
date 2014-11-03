function obtemData(data){
	if(data){
		var set = document.getElementById("set");
		var setor = set.options[setor.selectedIndex].value;
		var url="reservas.php?data="+data+"&setor="+setor;
		requisicaoHTTP("GET",url,true);
	}
}

function trataDados(){
	var date = ajax.responseText;
	document.getElementById("date").innerHTML=date;
}