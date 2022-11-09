<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../../css/colores.css">
    <meta charset="UTF-8">
    <script type="text/javascript" src="../js/expresiones_regulares.js"></script>
    <script type="text/javascript" src="js/tipo_inmueble_nuevo.js"></script>
</head>
<body>
    <div class="estil">
    <form action="tipo_inmueble_nuevo1.php" method="post" name="tipo_inmueble_nuevo" class="estiloin">
   
            <p><h1>TIPO DE INMUEBLE</h1></p>   
            <p>DETALLES  DEL INMUEBLE<input type="text" name="detalle_inmueble" size="15" class="otro"onkeyup="this.value=this.value.toUpperCase()" >(*)</p>          
                <input type="hidden" name="accion" value="">
                 <input type="button" name="aceptar"  onclick="validar();" class="bt" value="aceptar">
                  <input type="button" name="cancelar" onclick="javascript:location.href='tipo_inmueble.php';" class="tb" value="CANCELAR">
            </p>
            <p>
                <b>(*)Campos Obligatorios</b>
            </p>
                                   
         

    </form>
    </div>
</body>
</html>