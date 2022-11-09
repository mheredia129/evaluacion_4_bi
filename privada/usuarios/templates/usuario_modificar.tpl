<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../css/colores.css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/usuario_nuevo.js"></script>
	
</head>
<body>

<div class="estil">  

	<form action="usuario_modificar1.php" method="post" name="usuario_nuevo" class="estiloin">
		<table>
				<p><h1>MODIFICAR USUARIO</h1></p> 
                       <b>Persona (*)</b>
					<select name="persona_pk">
						{foreach item=r from=$persona}
						<option value="{$r.persona_pk}">{$r.apellido_paterno}-{$r.apellido_materno}- {$r.nombres}</option>
						{/foreach}
						{foreach item=r from=$personas}
						<option value="{$r.persona_pk}">{$r.apellido_paterno}-{$r.apellido_materno}-
						{$r.nombres}</option>
						{/foreach}
					</select>			
			{foreach item=r from=$usuario}
				<p>USUARIO<input type="text" name="usuario" value="{$r.usuario1}" class="otro"> </p>
	            <p>CLAVE<input type="text" name="clave"  value="{$r.clave}" class="otro"> </p>
					<input type="hidden" name="accion" value="">
					<input type="hidden" name="usuario_pk" value="{$r.usuario_pk}">
					<input type="button" value="Actualizar"   value="" onclick="validar();" class="bt">
					<input type="button" value="Cancelar" onclick="javascript:location.href='usuarios.php';" class="tb">
			{/foreach}
		</table>
		
	</form>
</div>
</body>
</html>