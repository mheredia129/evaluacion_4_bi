"use strict"
function validar(){


var nombres = document.persona_nuevo.nombres.value;
var apellido_paterno = document.persona_nuevo.apellido_paterno.value;
var apellido_materno = document.persona_nuevo.apellido_materno.value;
var numero_de_celular = document.persona_nuevo.numero_de_celular.value;
var ci = document.persona_nuevo.ci.value; 

if(!v1.test(nombres)&& (nombres=="")){
	alert("llene bien su nombre ");
document.persona_nuevo.nombres.focus();
return;
}
/*valida datos correctos letras espacios*/


if((apellido_paterno=="")&&(apellido_materno=="")){
	alert("tiene que llenar 1 de los apellidos");
document.persona_nuevo.apellido_paterno.focus();
return;
}


if(numero_de_celular==""){
	alert(" digite su numero de celular");
document.persona_nuevo.numero_de_celular.focus();
return;
}
/*valida  si hay numeros enteros  positivos*/
if(!v2.test(numero_de_celular)||(numero_de_celular=="")){
	alert("ingrese solo  numeros " );
document.persona_nuevo.numero_de_celular.focus();
return;
}
if(ci==""){
	alert(" digite su ci");
document.persona_nuevo.ci.focus();
return;
}


document.persona_nuevo.submit();


               
  
} 

