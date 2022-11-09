"use strict"
function validar(){


var nombre = document.datos_propietario.nombres.value;
var apellido_paterno = document.datos_propietario.apellido_paterno.value;
var apellido_materno = document.datos_propietario.apellido_materno.value;
var date = document.datos_propietario.date.value;
var numero_de_celular = document.datos_propietario.numero_de_celular.value; 

if(!v1.test(nombre)){
	alert("llene el bien su nombre ");
	

document.datos_propietario.nombre.focus();
return;
}
/*valida datos correctos letras espacios*/


if(!v1.test(apellido_paterno)){
	alert("el apellido paterno esta vacio");
document.datos_propietario.apellido_paterno.focus();
return;
}



if(!v1.test(apellido_materno)){
	alert("el apellido materno esta vacio");
document.datos_propietario.apellido_materno.focus();
return;
}

/*valida si si hay apellido*/
if((apellido_paterno =="") && (apelido_materno=="")){
alert(" no ha apellidos");
document.datos_propietario.apellido_materno.focus();
return;
}

if(date==""){
	alert(" ponga su fecha de nacimineto");
document.datos_propietario.date.focus();
return;
}
/*valida  si hay numeros enteros  positivos*/
if(!v2.test(numero_de_celular)||(numero_de_celular=="")){
	alert("ingrese solo  numeros " );
document.datos_propietario.numero_de_celular.focus();
return;
}


document.datos_propietario.submit();
               
  
} 

