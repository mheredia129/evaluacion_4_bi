<!DOCTYPE html>

<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css" >
	<script type="text/javascript">
		var ventanaCalendario=false
		function imprimir(){
			ventanaCalendario =window.open("ingresos_economicos_fechas1.php" , "calendario","width=600, height-550,left-100,top-100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
		}
	</script>
	
</head>
<body>
	<table width="100%" border="0">
		<tr>
			<td align="center"><h1>INGRESOS ECONOMICOS</h1></td>
		</tr>
	</table>
	<br>
	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>MONTO</th><th>DESCRIPCION</th><th>FECHA DE INGRESO</th><th>NRO DE CASA</th> <th>EFECTIVO DISPONIBLE</th>
			</tr>
				{assign var="b" value="1"}
	            {foreach item=r from=$ingresos_economicos}
	            <tr>
	            	<td align="center">{$b}</td>
				    <td>{$r.monto}</td>
				    <td>{$r.descripcion}</td>
				    <td>{$r.fecha_ingreso}</td>
				    <td>{$r.numero_casa}</td>
				    <td>{$r.monto_dis}</td>
				   {assign var="b" value="`$b+1`"}
				    
	            </tr>
	            {/foreach}
		</table>
		<br><br>
		<h2>
			<input type="radio" name="seleccionar" onclick="javascript:imprimir()">Imprimir
		</h2>
	</center>
</body>
</html>