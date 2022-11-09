<!DOCTYPE html>
<head>
	<link rel="stylesheet"href="{$direc_css}" type="text/css" >
</head>
<body >
	<form action="claves/" method="POST" target="cuerpo">
		{if $nick==""}
		<div class="formu_ingreso">
			<p><h1>Ingresar al sistema</h1></p>
			<p>Usuario:<input type="text" name="hi" class="otro" placeholder="ingrese su usuario"></p>
			<p>Contraseña: <input type="password" name="password" class="otro" placeholder="ingrese su contraseña"></p>
			<input type="submit" name="accion" value="Ingresar" class="otro">
		</div>
		{/if}
	</form>
</body>
</html>