 "use strict"
function validar(){

var detalle_inmueble = document.tipo_inmueble_nuevo.detalle_inmueble.value;


if(!v1.test(detalle_inmueble)){
	alert("ponga  su tipo de inmueble que posee");
document.tipo_inmueble_nuevo.detalle_inmueble.focus();
return;
}



document.tipo_inmueble_nuevo.submit();

               
  
} 

