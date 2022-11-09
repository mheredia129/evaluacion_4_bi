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
				<h1>USUARIOS</h1>
			</td>
			<td align="right" width="33%">
				<form name="formuNuevo" method="post" action="usuario_nuevo.php">
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
				<th>NRO</th><th>USUARIO</th><th>PERSONA</th>
				<th><img src="../../imagenes/modificar.png" ></th><th><img src="../../imagenes/borrar1.jpg" ></th>
			</tr>

			{assign var="b"  value='1'}
			{foreach  item=r from=$usuarios}

			<tr>
				<td align="center">{$b}</td>
				<td>{$r.usuario1}</td>
				<td>{$r.apellido_paterno }  {$r.apellido_materno }  {$r.nombres }</td>
				<td align="center">
					<form name="formModif{$r.usuario_pk}" method="post" action="usuario_modificar.php">
						<input type="hidden" name="usuario_pk" value="{$r.usuario_pk}">
						<input type="hidden" name="persona_pk" value="{$r.persona_pk}">
						<a href="javascript:document.formModif{$r.usuario_pk}.submit();" title="modificar usuario">
							modificar>>>>>
						</a>						
					</form>					
				</td>
				<td align="center">
					<form name="formElimi{$r.usuario_pk}" method="post" action="usuario_eliminar.php">
						<input type="hidden" name="usuario_pk" value="{$r.usuario_pk}">
						<a href="javascript:document.formElimi{$r.usuario_pk}.submit();" title="eliminar usuario"
						onclick='javascript:return(confirm("desea realmente eliminar al usuario:::{$r.usuario_pk}..?"));'>eliminar>>						
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