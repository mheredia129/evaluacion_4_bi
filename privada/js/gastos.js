 "use strict"
function validar(){
var descripcion_del_gasto = document.gastos.descripcion_del_gasto.value;
var date = document.gastos.date.value;


if(!v1.test(descripcion_del_gasto)){
	alert("el campo de  descripion esta vacio");
document.gastos.descripcion_del_gasto.focus();
return;
}
if(date == ""){
	alert("no a puesto la fecha del gasto");
document.gastos.date.focus();
return;
}


document.gastos.submit();
               
  
} 