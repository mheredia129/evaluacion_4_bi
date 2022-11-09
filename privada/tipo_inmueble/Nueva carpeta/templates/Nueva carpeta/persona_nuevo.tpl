
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../../css/colores.css">
    <meta charset="UTF-8">
    <script type="text/javascript" src="../js/expresiones_regulares.js"></script>
    <script type="text/javascript" src="../js/persona_nuevo.js"></script>
</head>
<body>
    <div class="estil">
    <form action="spinsertar.php" method="post" name="persona_nuevo" class="estiloin">
   
            <p><h1>INGRESAR DATOS</h1></p>   
            <p>NOMBRES<input type="text" name="nombres"  class="otro" ></p>          
            <p>APELLIDO PATERNO<input type="text" name="apellido_paterno"  class="otro"></p>              
            <p>APELLIDO MATERNO<input type="text" name="apellido_materno"  class="otro"></p>              
            <p>NUMERO DE CELULAR<input type="text" name="numero_de_celular"  class="otro"></p>            
            <p>CI<br><input type="text" name="ci"  class="otro"></p>                          
            <input type="button" name="Guardar" value="GUARDAR" onclick="validar()" class="bt">
            <input type="reset" name="boton"  value="CANCELAR"  class="tb">

    </form>
    </div>
</body>
</html>