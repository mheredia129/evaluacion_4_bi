"use strict"
function validar(){

var persona_pk = document.usuario_nuevo.persona_pk.value;
var usuario = document.usuario_nuevo.usuario.value;
var clave = document.usuario_nuevo.clave.value;


if(persona_pk==""){
	alert("por favor selecione una persona");
document.usuario_nuevo.persona_pk.focus();
return;
}

if(usuario==""){
	alert("por favor ingrese su usuario");
document.usuario_nuevo.usuario.focus();
return;
}
if(clave==""){
	alert("por favor ingrese su clave");
document.usuario_nuevo.clave.focus();
return;
}
document.usuario_nuevo.submit();
} 

