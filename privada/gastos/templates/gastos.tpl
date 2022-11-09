<!DOCTYPE html>

<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css" >
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<script type="text/javascript" src="../../ajax.js"></script>
	<script type="text/javascript" src="js/buscar_gasto.js"></script>
	 <link rel="stylesheet" type="text/css" href="../calendario/tcal.css">
    <script type="text/javascript" src="../calendario/tcal.js"></script>
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
				<h1>GASTOS</h1>
			</td>
			<td align="right" width="33%">
				<form name="formuNuevo" method="post" action="gastos_nuevo.php">
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
		<table class="listado">
			<tr>
				<th>NRO</th><th>NRO CASA</th><th>TIPO DE GASTO</th><th>DESCRIPCION</th><th>FECHA</th><th>MONTO</th><th>MONTO DISPONIBLE</th>
				<th><img src="../../imagenes/modificar.png" ></th><th><img src="../../imagenes/borrar1.jpg" ></th>
			</tr>

			{assign var="b"  value='1'}
			{foreach  item=r from=$gastos}

			<tr>
				<td align="center">{$b}</td>
				<td>{$r.numero_casa}</td>
				<td>{$r.tipo_gasto } </td> 
				<td>{$r.descripcion }</td>
				<td>{$r.fecha_gasto }</td>
				<td>{$r.monto }</td>
				<td>{$r.monto_dis }</td>
				<td align="center">
					<form name="formModif{$r.gasto_pk}" method="post" action="gastos_modi.php">
						<input type="hidden" name="gasto_pk" value="{$r.gasto_pk}">
						<input type="hidden" name="domicilio_pk" value="{$r.domicilio_pk}">
						<input type="hidden" name="tipo_gasto_pk" value="{$r.tipo_gasto_pk}">
						<input type="hidden" name="efectivo_disponible_pk" value="{$r.efectivo_disponible_pk}">
						<a href="javascript:document.formModif{$r.gasto_pk}.submit();" title="modificar gasto">
							modificar>>>>>
						</a>						
					</form>					
				</td>
				<td align="center">
					<form name="formElimi{$r.gasto_pk}" method="post" action="gastos_eliminar.php">
							<input type="hidden" name="gasto_pk" value="{$r.gasto_pk}">
						<a href="javascript:document.formElimi{$r.gasto_pk}.submit();" title="eliminar gasto"
						onclick='javascript:return(confirm("desea realmente eliminar ael gasto:::{$r.gasto_pk}..?"));'>eliminar>>						
						</a>						
					</form>				
				</td>
				{assign var="b" value="`$b+1`"}
				{/foreach}
			</tr>
		</table>
	</div>
	</center>
</body>
</html>