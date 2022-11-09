<!DOCTYPE html>

<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css" >
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
</head>
<body>
	<table width="100%" border="0">
		<tr>
			<td width="33%">
			<table border="0">
				<tr>
		
				</tr>
			</table> 		
			</td>
			<td align="center" width="33%">
				<h1>INGRESOS ECONOMICOS</h1>
			</td>
			<td align="right" width="33%">
				<form name="formuNuevo" method="post" action="ingreso_economico_nuevo.php">
					
					<a href="javascript:document.formuNuevo.submit()">
						<table>
					<tr>
					<th>
						<img src="../../imagenes/nuevo.png" width="15%" >
						 <br>Nuevo
					</th>
				</tr>
				</table>
					</a>
				</form>
			</td>
		</tr>	
	</table>
	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>NRO CASA</th><th>DESCRIPCION</th><th>FECHA</th><th>MONTO</th><th>MONTO DISPONIBLE</th>
				<th><img src="../../imagenes/modificar.png" ></th><th><img src="../../imagenes/borrar1.jpg" ></th>
			</tr>

			{assign var="b"  value='1'}
			{foreach  item=r from=$ingresos_economicos}

			<tr>
				<td align="center">{$b}</td>
				<td>{$r.numero_casa}</td>
				<td>{$r.descripcion }</td>
				<td>{$r.fecha_ingreso }</td>
				<td>{$r.monto }</td>
				<td>{$r.monto_dis }</td>
				<td align="center">
					<form name="formModif{$r.ingreso_economico_pk}" method="post" action="ingreso_economico_modi.php">
						<input type="hidden" name="ingreso_economico_pk" value="{$r.ingreso_economico_pk}">
						<input type="hidden" name="domicilio_pk" value="{$r.domicilio_pk}">
						<input type="hidden" name="efectivo_disponible_pk" value="{$r.efectivo_disponible_pk}">
						<a href="javascript:document.formModif{$r.ingreso_economico_pk}.submit();" title="modificar ingreso economico">
							modificar>>>>>
						</a>						
					</form>					
				</td>
				<td align="center">
					<form name="formElimi{$r.ingreso_economico_pk}" method="post" action="ingreso_economico_eliminar.php">
							<input type="hidden" name="ingreso_economico_pk" value="{$r.ingreso_economico_pk}">
						<a href="javascript:document.formElimi{$r.ingreso_economico_pk}.submit();" title="eliminar ingreso economico"
						onclick='javascript:return(confirm("desea realmente eliminar al ingreso economico:::{$r.ingreso_economico_pk}..?"));'>eliminar>>						
						</a>						
					</form>				
				</td>
				{assign var="b" value="`$b+1`"}
				{/foreach}
			</tr>
		</table>
	</center>
</body>
</html>