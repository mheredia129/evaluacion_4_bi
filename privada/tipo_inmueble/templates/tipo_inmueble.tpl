<!DOCTYPE html>

<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css" >
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
</head>
<body>
	<div class="titulo_listado">
		<h1>
			TIPO DE INMUEBLE
		</h1>
		
	</div>
	<div class="titulo_nuevo">
		<form name="formuNuevo" method="post" action="tipo_inmueble_nuevo.php">
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
				<th>NRO</th><th>TIPO DE INMUEBLE</th>
				<th><img src="../../imagenes/modificar.png" ></th><th><img src="../../imagenes/borrar1.jpg" ></th>
			</tr>
			{assign var="b" value="0"}
			{assign var="total" value="`$pagina-1`"}
			{assign var="a" value="`$numreg*$total`"}
			{assign var="b" value="`$b+1+$a`"}
			{foreach item=r from=$tipo_inmueble}
			<tr>
				<td align="center">{$b}</td>
				<td align="center">{$r.detalle_inmueble}</td>
				
				<td align="center">
					<form name="formModif{$r.tipo_inmueble_pk}" method="post" action="tipo_inmueble_modificar.php">
						<input type="hidden" name="tipo_inmueble_pk" value="{$r.tipo_inmueble_pk}">
						<a href="javascript:document.formModif{$r.tipo_inmueble_pk}.submit();" title="modificar tipo inmueble sistema">
							modificar>>>
						</a>
					</form>
				</td>
				<td align="center">
					<form name="formElimi{$r.tipo_inmueble_pk}" method="post" action="tipo_inmueble_eliminar.php">
						<input type="hidden" name="tipo_inmueble_pk" value="{$r.tipo_inmueble_pk}">
						<a href="javascript:document.formElimi{$r.tipo_inmueble_pk}.submit();" title="eliminar el tipo de inmueble del sistema" onclick="javascript:return(confirm('desea realmente eliminar al tipo de inmueble..?')); location.href='tipo_inmueble_eliminar.php'">
							eliminar>>>
						</a>
					</form>
				</td>
				{assign var="b" value="`$b+1`"}
				{/foreach}
			</tr>
		</table>

		<table>
			<tr align="center">
				<td>
					{if !empty($urlback)}
					<a onclick="location.href='{$urlback}'" style="font-family: Verdana;font-size: 20px;cursor:pointer";>&laquo;Anterior</a>
				{/if}
				{if !empty($paginas)}
					{foreach from=$paginas item=pag}
					{if $pag.npag == $pagina}
						{if $pagina neq '1'}-|-{/if}<b style="color:#e8eb2d94;font-size: 40px; ">{$pag.npag}</b>
					{else}
					-|- <a onclick="location.href = '{$pag.pagV}'" style="cursor: pointer; ">{$pag.npag}</a>
					{/if}
					{/foreach}
					{/if}
					{if $numpaginas gt $numbotones and !empty($urlnext) and $pagina lt $numpaginas}
					-|- <a onclick="location.href='{$urlnext}'" style="font-family: century gothic; font-size: 20px; cursor: pointer">Siguinte&raquo;</a>
					{/if}
				</td>
			</tr>
		</table>
	</center>
	
</body>
</html>