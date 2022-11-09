"use strict"
function validar(){


var nombre = document.formu.nombre.value;


if(nombre==""){
	alert(" nombre obligatorio");
document.formu.nombre.focus();
return;
}


document.formu.submit();


               
  
} 

