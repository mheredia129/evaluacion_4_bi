
<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" type="text/css" href="../../css/colores.css">
    <meta charset="UTF-8">
    <script type="text/javascript" src="../js/expresiones_regulares.js"></script>
    <script type="text/javascript" src="../js/persona_nuevo.js"></script>
</head>
<body>



    <div class="estil">    
       
    <form action="speditar.php" method="post" class="estiloin">
         {foreach  item=r from=$persona_modificar}
        <table>

                <p><h1>INGRESAR DATOS</h1></p>  
                <input type="hidden" name="persona_pk" value="{$r.persona_pk}" > 

                <p>CI<br><input type="text" name="ci" value="{$r.ci}" class="otro"> </p>  

                <p>NOMBRES<input type="text" name="nombres" value="{$r.nombres}" class="otro" ></p>

                <p>APELLIDO PATERNO<input type="text" name="apellido_paterno" value="{$r.apellido_paterno}" class="otro"></p>              
                <p>APELLIDO MATERNO<input type="text" name="apellido_materno" value="{$r.apellido_materno}" class="otro"></p>              
                <p>NUMERO DE CELULAR<input type="text" name="numero_de_celular" value="{$r.numero_de_celular}" class="otro"></p>            
          
                 <input type="hidden" name="accion" value="">
                <input type="hidden" name="persona_pk" value="{$r.persona_pk}">
                <input type="button" value="Actualizar" onclick="validar();" >
                <input type="button" value="Cancelar"onclick="javascript:location.href='personas.php';">
                
        

            </table>
            {/foreach}
    </form>
     
    </div>
     
    
</body>
</html>