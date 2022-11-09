 "use strict"
function validar(){

var numero_domicilio = document.datos_domicilio.numero_domicilio.value;
var direccion = document.datos_domicilio.direccion.value;
var descripcion = document.datos_domicilio.descripcion.value;
if(!v2.test(numero_domicilio)||(numero_domicilio=="") ){
		alert("ingrese su numero de domicilio ");
document.datos_domicilio.numero_domicilio.focus();
return;
}

if(!v1.test(direccion)){
	alert("ponga  su direccion ");
document.datos_domicilio.direccion.focus();
return;
}
if(!v1.test(descripcion)){
	alert("ponga  su descripcion");
document.datos_domicilio.descripcion.focus();
return;
}

document.datos_domicilio.submit();
               
  
} 

