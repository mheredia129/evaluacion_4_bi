 "use strict"
function validar(){


var monto = document.ingresos_economicos.monto.value;
var descripcion_del_monto = document.ingresos_economicos.descripcion_del_monto.value;
var date = document.ingresos_economicos.date.value;

if(!v22.test(monto)){
	alert(" el campo de  monto  esta vacio");
document.ingresos_economicos.monto.focus();
return;
}

if(!v1.test(descripcion_del_monto)){
	alert("el campo de  descripion esta vacio");
document.ingresos_economicos.direccion.focus();
return;
}
if(date ==""){
	alert("no a puesto la fecha");
document.ingresos_economicos.date.focus();
return;
}


document.ingresos_economicos.submit();
               
  
} 