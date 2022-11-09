<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}"type="text/css">
	 <script type="text/javascript" src="../../ajax.js"></script>
	<meta charset="	UTF-8">

<script type="text/javascript">
function buscar_gasto(){
var d1,d2,d3, ajax,url,param,contenedor;
contenedor = document.getElementById('gasto1');
d1 = document.formu.desc.value;
d2 = document.formu.dec_gas.value;
d3 = document.formu.mont.value;
ajax = nuevoAjax();
url = "ajax_buscar_gasto.php"
param = "desc="+d1+"&dec_gas="+d2+"&mont="+d3;
ajax.open("POST", url, true);
ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
ajax.onreadystatechange = function(){
	if (ajax.readyState == 3){
		contenedor.innerHTML = ajax.responseText;
	}
}
ajax.send(param);
}

function mostrar(gasto_pk){
	var d1 ,ventanaCalendario;
	d1 = gasto_pk;
ventanaCalendario = window.open("ficha_tec_gasto1.php?gasto_pk="+d1, "calendario", "width=600, heigth=550,left=100,top=100, scrollbars=yes, menubars=no, statusbas=NO, status=NO, resizable=YES, location=NO")
}
</script>

</head>
<body>
	<center>
		<br>
		<h1>FICHA TECNICA DE GASTOS</h1>
	<form action="#" method="post" name="formu">
			<table border="1" class="estiloin">
				<tr>
					<th>
						<b>descripcion</b><br> 
						<input type="text" name="desc" value="" size="10" onkeyUp="buscar_gasto()">
					</th>
					<th>
						<b>fecha gasto</b><br> 
						 <input type="date" name="dec_gas" class="tcal" value="" size="10" onkeyUp="buscar_gasto()">
						
					</th>
					<th>
						<b>monto</b><br> 
						<input type="text" name="mont" value="" size="10" onkeyUp="buscar_gasto()">
					</th>
					
				</tr>				
			</table>
		</form>
	</center>
	<center>
		<div id="gasto1">
		</div>
	</center>
</body>
</html>