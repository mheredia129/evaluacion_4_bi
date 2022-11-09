<?php

$tipo_de_inmueble = $_POST["tipo_de_inmueble"];

$formulario = $_POST["formulario"];
echo"los valores introducidos  de $formulario son: 
 <br> tipo de inmueble : $tipo_de_inmueble
 ";
?>
<section id="columna">
    <div id="subtitulo1">
        DETALLES  DEL INMUEBLE
    </div>
    <form name="inmuebles" action="inmuebles.php" method="post" >
        <input type="text" name="tipo_de_inmueble" placeholder="que tipo de inmueble tiene?" required=""class="otro" >
        <input type="hidden" name="formulario" value=" datos del inmueble">
        
        <input type="button" name="boton" value="ENVIAR" class="boton" onclick="validar()" class="otro">
        <input type="reset" name="boton"  value="CANCELAR" class="boton" class="otro" >
        <p>
            <h3> <font color="red">datos obligatorios (*)</font></h3>
        </p>
        
    </form>
</section>