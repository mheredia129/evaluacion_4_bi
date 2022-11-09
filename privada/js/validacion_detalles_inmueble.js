 "use strict"
function validar(){

var tipo_de_inmueble = document.inmuebles.tipo_de_inmueble.value;


if(!v1.test(tipo_de_inmueble)){
	alert("ponga  su tipo de inmueble que posee");
document.inmuebles.tipo_de_inmueble.focus();
return;
}



document.inmuebles.submit();

               
  
} 

