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
				<h1>DOMICILIO</h1>
			</td>
			<td align="right" width="33%">
				<form name="formuNuevo" method="post" action="domicilio_nuevo.php">
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
				<th>NRO</th><th>TIPO DE INMUEBLE</th><th>PROPIETARIO</th><th>NRO CASA</th><th>TIPO DE GASTO</th><th>DESCRIPCION</th>
				<th><img src="../../imagenes/modificar.png" ></th><th><img src="../../imagenes/borrar1.jpg" ></th>
			</tr>

			{assign var="b"  value='1'}
			{foreach  item=r from=$domicilios}

			<tr>
				<td align="center">{$b}</td>

			    <td>{$r.detalle_inmueble }</td>
				<td>{$r.nombre } {$r.apellido_paterno} {$r.apellido_materno}</td>
				<td>{$r.numero_casa}</td>
				<td>{$r.direccion } </td> 
				<td>{$r.descripcion_domicilio }</td>
			
				<td align="center">
					<form name="formModif{$r.domicilio_pk}" method="post" action="domicilio_modificar.php">
						<input type="hidden" name="domicilio_pk" value="{$r.domicilio_pk}">
						<input type="hidden" name="tipo_inmueble_pk" value="{$r.tipo_inmueble_pk}">
						<input type="hidden" name="propietario_pk" value="{$r.propietario_pk}">
					
						<a href="javascript:document.formModif{$r.domicilio_pk}.submit();" title="modificar domicilio">
							modificar>>>>>
						</a>						
					</form>					
				</td>
				<td align="center">
					<form name="formElimi{$r.domicilio_pk}" method="post" action="domicilio_eliminar.php">
						<a href="javascript:document.formElimi{$r.domicilio_pk}.submit();" title="eliminar domicilio"
						onclick='javascript:return(confirm("desea realmente eliminar al domicilios:::{$r.domicilio_pk}..?"));'>eliminar>>						
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