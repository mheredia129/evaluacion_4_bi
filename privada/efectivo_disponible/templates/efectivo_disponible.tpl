<!DOCTYPE html>

<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css" >
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
</head>
<body>
	<div class="titulo_listado">
		<h1>
			EFECTIVO DISPONIBLE
		</h1>
		
	</div>
	<div class="titulo_nuevo">
		<form name="formuNuevo" method="post" action="efectivo_disponible_nuevo.php">
			<a href="javascript:document.formuNuevo.submit();">
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
	</div>
	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>EFECTIVO DISPONIBLE</th>
				<th><img src="../../imagenes/modificar.png" ></th><th><img src="../../imagenes/borrar1.jpg" ></th>
			</tr>
		    {assign var="b"  value='1'}
			{foreach  item=r from=$efectivo_disponible}
			<tr>
				<td align="center">{$b}</td>
				<td align="center">{$r.monto_dis}</td>
				
				<td align="center">
					<form name="formModif{$r.efectivo_disponible_pk}" method="post" action="efectivo_disponible_modificar.php">
						<input type="hidden" name="efectivo_disponible_pk" value="{$r.efectivo_disponible_pk}">
						<a href="javascript:document.formModif{$r.efectivo_disponible_pk}.submit();" title="modificar monto sistema">
							modificar>>>
						</a>
					</form>
				</td>
				<td align="center">
					<form name="formElimi{$r.efectivo_disponible_pk}" method="post" action="efectivo_disponible_eliminar.php">
						<input type="hidden" name="efectivo_disponible_pk" value="{$r.efectivo_disponible_pk}">
						<a href="javascript:document.formElimi{$r.efectivo_disponible_pk}.submit();" title="eliminar el monto del sistema" onclick="javascript:return(confirm('desea realmente eliminar al efectivo disponible..?')); location.href='efectivo_disponible_eliminar.php'">
							eliminar>>>
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