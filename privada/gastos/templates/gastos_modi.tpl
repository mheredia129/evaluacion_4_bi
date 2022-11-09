<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../../css/colores.css">
    <meta charset="UTF-8">
    <script type="text/javascript" src="../js/expresiones_regulares.js"></script>
    <script type="text/javascript" src="js/gastos.js"></script>
    <link rel="stylesheet" type="text/css" href="../calendario/tcal.css">
    <script type="text/javascript" src="../calendario/tcal.js"></script>
</head>
<body>

<div class="estil">  

	<form action="gastos_modi1.php" method="post" name="gastos" class="estiloin">
		<table>
				<p><h1>MODIFICAR GASTO</h1></p> 
                       <b>nro de casa (*)</b>
					<select name="domicilio_pk">
						{foreach item=r from=$d1}
						<option value="{$r.domicilio_pk}">{$r.numero_casa}-{$r.direccion}- 
						</option>
						{/foreach}
						{foreach item=r from=$d2}
						<option value="{$r.domicilio_pk}">{$r.numero_casa}-{$r.direccion}-
						</option>
						{/foreach}
					</select><br>
					     <b>efectivo disponibe (*)</b>
					<select name="efectivo_disponible_pk">
						{foreach item=r from=$ed1}
						<option value="{$r.efectivo_disponible_pk}">{$r.monto_dis}-
						</option>
						{/foreach}
						{foreach item=r from=$ed2}
						<option value="{$r.efectivo_disponible_pk}">{$r.monto_dis}-
						</option>
						{/foreach}
					</select>				
			{foreach item=r from=$gastos}
			    <p>MONTO<input type="text" size="15"name="monto"  class="otro" value="{$r.monto}" >(*)</p> 

               <p>DESCRIPCION<br><textarea name="descripcion" cols="40" rows="5"  placeholder="{$r.descripcion}"></textarea>(*)</p>
                <p> 
                <p>
                    <input type="text" name="date" placeholder="fecha del ingreso del monto"class="tcal" value="{$r.fecha_gasto}">
                </p>

					<input type="hidden" name="accion" value="">
					<input type="hidden" name="gasto_pk" value="{$r.gasto_pk}">

					<input type="button" value="Actualizar"   value="" onclick="validar();" class="bt">
					<input type="button" value="Cancelar" onclick="javascript:location.href='gastos.php';" class="tb">
			{/foreach}
		</table>
		
	</form>
</div>
</body>
</html>