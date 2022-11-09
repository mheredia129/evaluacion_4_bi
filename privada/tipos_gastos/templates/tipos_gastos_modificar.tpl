
<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" type="text/css" href="../../css/colores.css">
    <meta charset="UTF-8">
    <script type="text/javascript" src="../js/expresiones_regulares.js"></script>
    <script type="text/javascript" src="js/tipo_de_gastos.js"></script>
</head>
<body>



    <div class="estil">    
       
    <form action="tipos_gastos_modificar1.php" method="post" class="estiloin" name="tipo_gasto">
         {foreach  item=r from=$tipos_gastos}
        <table>

                <p><h1>INGRESAR DATOS</h1></p>  
               

            

                <p>TIPO DE GASTO<input type="text" name="tipo_gasto" value="{$r.tipo_gasto}" class="otro" onkeyup="this.value=this.value.toUpperCase()"></p>

                           
   
                 




                 <input type="hidden" name="accion" value="">
                <input type="hidden" name="tipo_gasto_pk" value="{$r.tipo_gasto_pk}">
                <input type="button" value="Actualizar" onclick="validar();" class="bt">
                <input type="button" value="Cancelar"onclick="javascript:location.href='tipos_gastos.php';" class="tb">
                
        

            </table>
            {/foreach}
    </form>
     
    </div>
     
    
</body>
</html>