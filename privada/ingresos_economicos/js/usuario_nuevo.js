"use strict"
function validar(){

var domicilio_pk = document.ingreso_economico_nuevo.domicilio_pk.value;
var efectivo_disponible_pk = document.ingreso_economico_nuevo.efectivo_disponible_pk.value;
var monto_in = document.ingreso_economico_nuevo.monto_in.value;
var desc_in = document.ingreso_economico_nuevo.desc_in.value;

if(domicilio_pk==""){
	alert("por favor selecione un nro de casa");
document.ingreso_economico_nuevo.domicilio_pk.focus();
return;
}
if(efectivo_disponible_pk==""){
	alert("por favor selecione un nro el monto disponible");
document.ingreso_economico_nuevo.efectivo_disponible_pk.focus();
return;
}

if(monto_in==""){
	alert("por favor ingrese un monto");
document.ingreso_economico_nuevo.monto_in.focus();
return;
}

if(desc_in==""){
	alert("por favor describa de que es su ingreso economico");
document.ingreso_economico_nuevo.desc_in.focus();
return;
}

document.ingreso_economico_nuevo.submit();
} 

