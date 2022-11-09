<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../../css/colores.css">
    <meta charset="UTF-8">
    <script type="text/javascript" src="../js/expresiones_regulares.js"></script>
    <script type="text/javascript" src="js/tipo_de_gastos.js"></script>
</head>
<body>
    <div class="estil">
    <form action="tipos_gastos_nuevo1.php" method="post" name="tipo_gasto" class="estiloin">
   
            <p><h1>TIPOS DE GASTOS</h1></p>   
            <p>TIPO DE GASTO<input type="text" name="tipo_gasto" placeholder="tipo de gasto" size="15" class="otro"onkeyup="this.value=this.value.toUpperCase()" >(*)</p>          
            
                <input type="hidden" name="accion" value="">

                 <input type="button" name="aceptar"  onclick="validar();" class="bt" value="aceptar">

                  <input type="button" name="cancelar" onclick="javascript:location.href='tipos_gastos.php';" class="tb" value="CANCELAR">
            </p>
            <p>
                <b>(*)Campos Obligatorios</b>
            </p>
                                   
         

    </form>
    </div>
</body>
</html>