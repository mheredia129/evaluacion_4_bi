<!DOCTYPE html>
<html>
<head>

    <script type="text/javascript">
        var ventanaCalendario=false
        function imprimir(){
            if (confirm('Desea Imprimir ?')){
                window.print();
            }
        }
    </script>
</head>
<body style='cursor:pointer;cursor:hand' onclick="imprimir();">
    <table width="100%" border="0">
        <tr>
            <td><img src="../../imagenes/{$logo}" width="70%" >
            </td>
            <td align="center" width="80%">
            <h1>FICHA TECNICA DE PROPIETARIO</h1>
        </td>
        </tr>
    </table>
    <br>
    <center>
        <table border="1" cellspacing="0">
    
          <tr>
            <td>
                <table border="0">
            {foreach item=r from=$propietario}
            <tr>    
                <th align="right"> nombres</th><th>:</th>
                <td><input type="text" name="nombres" value="{$r.nombre}" disabled=""></td>
                 </tr>
                 <th align="right"> apellido paterno</th><th>:</th>
                <td><input type="text" name="nombres" value="{$r.apellido_paterno}" disabled=""></td>
                 </tr>
                  <th align="right"> apellido materno</th><th>:</th>
                <td><input type="text" name="nombres" value="{$r.apellido_materno}" disabled=""></td>
                 </tr>
                  <th align="right"> telefono</th><th>:</th>
                <td><input type="text" name="nombres" value="{$r.numero_celular}" disabled=""></td>
                 </tr>

                          {/foreach}
           
        </table>
      </td>
  </tr>
</table>
    </center>
    
</body>
</html>
