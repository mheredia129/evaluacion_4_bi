"use strict"
function buscar_propietario(){
var d1,d2,d3,d4, ajax,url,param,contenedor;
contenedor = document.getElementById('propietario1');
d1 = document.formu.paterno.value;
d2 =document.formu.materno.value;
d3 =document.formu.nombre.value;
d4 =document.formu.num_cel.value;
ajax = nuevoAjax();
url = "ajax_buscar_propietario.php"
param = "paterno="+d1+"&materno="+d2+"&nombre="+d3+"&num_cel="+d4;
ajax.open("POST", url, true);
ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
ajax.onreadystatechange = function(){
	if (ajax.readyState == 4){
		contenedor.innerHTML = ajax.responseText;
	}
}
ajax.send(param);
}
