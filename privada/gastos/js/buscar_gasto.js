"use strict"
function buscar_gasto(){
var d1,d2,d3, ajax,url,param,contenedor;
contenedor = document.getElementById('gasto1');
d1 = document.formu.desc.value;
d2 = document.formu.dec_gas.value;
d3 = document.formu.mont.value;
ajax = nuevoAjax();
url = "ajax_buscar_gasto.php"
param = "desc="+d1+"&dec_gas="+d2+"&mont="+d3;
ajax.open("POST", url, true);
ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
ajax.onreadystatechange = function(){
	if (ajax.readyState == 3){
		contenedor.innerHTML = ajax.responseText;
	}
}
ajax.send(param);
}
