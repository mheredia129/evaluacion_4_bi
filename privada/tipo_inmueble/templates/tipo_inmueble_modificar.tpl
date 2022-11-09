
<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" type="text/css" href="../../css/colores.css">
    <meta charset="UTF-8">
    <script type="text/javascript" src="../js/expresiones_regulares.js"></script>
    <script type="text/javascript" src="js/tipo_inmueble_nuevo.js"></script>
</head>
<body>



    <div class="estil">    
       
    <form action="tipo_inmueble_modificar1.php" method="post" class="estiloin" name="tipo_inmueble_nuevo">
         {foreach  item=r from=$tipo_inmueble}
        <table>

                <p><h1>MODIFICAR  TIPOS DE INMUEBLES</h1></p>  
               

                <p>DETALLES DEL INMUEBLE<br><input type="text" name="detalle_inmueble" 
                    value="{$r.detalle_inmueble}" class="otro" onkeyup="this.value=this.value.toUpperCase()"></p>  

                 <input type="hidden" name="accion" value="">
                <input type="hidden" name="tipo_inmueble_pk" value="{$r.tipo_inmueble_pk}">
                <input type="button" value="Actualizar" onclick="validar();" class="bt">
                <input type="button" value="Cancelar"onclick="javascript:location.href='tipo_inmueble.php';" class="tb">
                
        

            </table>
            {/foreach}
    </form>
     
    </div>
     
    
</body>
</html>