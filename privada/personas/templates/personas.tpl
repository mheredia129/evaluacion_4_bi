<!DOCTYPE html>

<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css" >
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<script type="text/javascript" src="../../ajax.js"></script>
	<script type="text/javascript" src="js/buscar_personas.js"></script>
</head>
<body>
	<div class="titulo_listado">
		<h1>
			PERSONAS
		</h1>
		
	</div>
	<div class="titulo_nuev">
		<form name="formuNuevo" method="post" action="persona_nuevo.php">
			<a href="javascript:document.formuNuevo.submit();">
				
						<img src="../../imagenes/nuevo.png" width="15%"  >
						 <br>Nuevo
				
			</a>
		</form>
	</div>
	<center>		
		<form action="#" method="post" name="formu">
			<table border="1" class="estiloin">
				<tr>
					<th>
						<b>paterno</b><br> 
						<input type="text" name="paterno" value="" size="10" onkeyUp="buscar_personas()">
					</th>
					<th>
						<b>materno</b><br> 
						<input type="text" name="materno" value="" size="10" onkeyUp="buscar_personas()">
					</th>
					<th>
						<b>nombre</b><br> 
						<input type="text" name="nombre" value="" size="10" onkeyUp="buscar_personas()">
					</th>
					<th>
						<b>C.I</b><br> 
						<input type="text" name="ci" value="" size="10" onkeyUp="buscar_personas()">
					</th>
				</tr>				
			</table>
		</form>
	</center>


	<center>
		<div id="personas1">
		<table class="listado">
			<tr>
				<th>NRO</th><th>CI</th><th>NOMBRES</th><th>APELLIDO PATERNO</th><th>APELLIDO MATERNO</th>
				<th><img src="../../imagenes/modificar.png" ></th><th><img src="../../imagenes/borrar1.jpg" ></th>
			</tr>
			{assign var="b" value="0"}
			{assign var="total" value="`$pagina-1`"}
			{assign var="a" value="`$numreg*$total`"}
			{assign var="b" value="`$b+1+$a`"}
			{foreach item=r from=$personas}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.ci}</td>
				<td>{$r.nombres}</td>
				<td align="center">{$r.apellido_paterno}</td>
				<td align="center">{$r.apellido_materno}</td>
				<td align="center">
					<form name="formModif{$r.persona_pk}" method="post" action="persona_modificar.php">
						<input type="hidden" name="persona_pk" value="{$r.persona_pk}">
						<a href="javascript:document.formModif{$r.persona_pk}.submit();" title="modificar persona sistema">
							modificar
						</a>
					</form>
				</td>
				<td align="center">
					<form name="formElimi{$r.persona_pk}" method="post" action="persona_eliminar.php">
						<input type="hidden" name="persona_pk" value="{$r.persona_pk}">
						<a href="javascript:document.formElimi{$r.persona_pk}.submit();" title="eliminar persona sistema" onclick="javascript:return(confirm('desea realmente eliminar a la persona..?')); location.href='persona_eliminar.php'">
							eliminar
						</a>
					</form>
				</td>
				{assign var="b" value="`$b+1`"}
				{/foreach}
			</tr>
		</table>

		<table >
			<tr align="center">
				<td>
					{if !empty($urlback)}
					<a onclick="location.href='{$urlback}'" style="font-family: century gothic;font-size: 20px;cursor:pointer";>&laquo;Anterior</a>
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
      </div>
	</center>
	
</body>
</html>