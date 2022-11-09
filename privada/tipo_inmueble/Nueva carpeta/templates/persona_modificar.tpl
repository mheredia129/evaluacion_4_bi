
<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" type="text/css" href="../../css/colores.css">
    <meta charset="UTF-8">
    <script type="text/javascript" src="../js/expresiones_regulares.js"></script>
    <script type="text/javascript" src="js/persona_nuevo.js"></script>
</head>
<body>



    <div class="estil">    
       
    <form action="persona_modificar1.php" method="post" class="estiloin" name="persona_nuevo">
         {foreach  item=r from=$persona}
        <table>

                <p><h1>INGRESAR DATOS</h1></p>  
               

                <p>CI<br><input type="text" name="ci" value="{$r.ci}" class="otro"> </p>  

                <p>NOMBRES<input type="text" name="nombres" value="{$r.nombres}" class="otro" onkeyup="this.value=this.value.toUpperCase()"></p>

                <p>APELLIDO PATERNO<input type="text" name="apellido_paterno" value="{$r.apellido_paterno}" class="otro" onkeyup="this.value=this.value.toUpperCase()"></p>              
                <p>APELLIDO MATERNO<input type="text" name="apellido_materno" value="{$r.apellido_materno}" class="otro" onkeyup="this.value=this.value.toUpperCase()"></p>              
                <p>NUMERO DE CELULAR<input type="text" name="numero_de_celular" value="{$r.numero_de_celular}" class="otro"></p>            
   
                 




                 <input type="hidden" name="accion" value="">
                <input type="hidden" name="persona_pk" value="{$r.persona_pk}">
                <input type="button" value="Actualizar" onclick="validar();" class="bt">
                <input type="button" value="Cancelar"onclick="javascript:location.href='personas.php';" class="tb">
                
        

            </table>
            {/foreach}
    </form>
     
    </div>
     
    
</body>
</html>