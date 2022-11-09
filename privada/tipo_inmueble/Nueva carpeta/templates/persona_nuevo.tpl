<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../../css/colores.css">
    <meta charset="UTF-8">
    <script type="text/javascript" src="../js/expresiones_regulares.js"></script>
    <script type="text/javascript" src="js/persona_nuevo.js"></script>
</head>
<body>
    <div class="estil">
    <form action="persona_nuevo1.php" method="post" name="persona_nuevo" class="estiloin">
   
            <p><h1>REGISTRAR PERSONA</h1></p>   
            <p>NOMBRES<input type="text" name="nombres" placeholder="nombres" size="15" class="otro"onkeyup="this.value=this.value.toUpperCase()" >(*)</p>          
            <p>APELLIDO PATERNO<input type="text"size="15" name="apellido_paterno"  class="otro" onkeyup="this.value=this.value.toUpperCase()">(*)</p>              
            <p>APELLIDO MATERNO<input type="text"size="15" name="apellido_materno"  class="otro" onkeyup="this.value=this.value.toUpperCase()">(*)</p>              
            <p>NUMERO DE CELULAR<input type="text" size="15"name="numero_de_celular"  class="otro" onkeyup="this.value=this.value.toUpperCase()">(*)</p>            
            <p>CI<br><input type="text" name="ci" size="15" class="otro"></p>
            <p>
                <input type="hidden" name="accion" value="">
                 <input type="button" name="aceptar"  onclick="validar();" class="bt" value="aceptar">
                  <input type="button" name="cancelar" onclick="javascript:location.href='personas.php';" class="tb" value="CANCELAR">
            </p>
            <p>
                <b>(*)Campos Obligatorios</b>
            </p>
                                   
         

    </form>
    </div>
</body>
</html>