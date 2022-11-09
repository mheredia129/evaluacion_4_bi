<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" type="text/css" href="../../css/colores.css">
    <meta charset="UTF-8">
    <script type="text/javascript" src="../js/expresiones_regulares.js"></script>
    <script type="text/javascript" src="js/sistema_casa.js"></script>

</head>
<body>

<center>
    <h1>SISTEMA DE CUENTAS DE TU CASA</h1>

     
       
    <form action="sistema_casa1.php" method="post" class="estiloin" name="formu" enctype="multipart/form-data">

         {foreach  item=r from=$sistema_casa}
        <table border="1">

                <p><h1>INGRESAR DATOS</h1></p>  
       
                <p>NOMBRE<input type="text" name="nombre" value="{$r.nombre}" class="otro" onkeyup="this.value=this.value.toUpperCase()"></p>

                <p>URL<input type="text" name="url" value="{$r.url}" class="otro" onkeyup="this.value=this.value.toUpperCase()"></p>              
                <p>LOGO(*)           
   
               <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
               <input type="file" name="logo">
               <input type="hidden" name="logo1" value="{$r.logo}">
               <br><b>{$r.logo}</b>
           
                
                  
                         <input type="hidden" name="accion" value="">
                          <input type="hidden" name="sistema_pk" value="{$r.sistema_pk}">
                           <input type="button" value="Aceptar"  class="bt" onclick="validar();">
       
          
          {/foreach}

            </table>
            <table>
                <tr>
                    <td colspan="3" align="center"><b>(*) campos obligatorios</b> </td>
                </tr>
            </table>
          
    </form>
     

     
    </center>

</body>
</html>