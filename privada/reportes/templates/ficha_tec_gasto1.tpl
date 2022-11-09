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
    <table width="100%" border="0" >
        <tr>
            <td><img src="../../imagenes/{$logo}" width="70%" >
            </td>
            <td align="left " width="80%">

            <h1>FICHA TECNICA DE GASTOS</h1>

        </td>
        </tr>
    </table>
    <br>
    <center>
        <table border="1" cellspacing="0">
    
          <tr>
            <td>
                <table border="0">
            {foreach item=r from=$gastos}
              <tr>  
                  <th align="right"> tipo de gasto</th><th>:</th>
                <td><input type="text" name="nombres" value="{$r.tipo_gasto}" disabled=""></td>
                 </tr>
            <tr>    
                <th align="right"> descripcion</th><th>:</th>
                <td><input type="text" name="nombres" value="{$r.descripcion}" disabled=""></td>
                 </tr>
  <tr>  
                 <th align="right"> fecha del gasto</th><th>:</th>
                <td><input type="text" name="nombres" value="{$r.fecha_gasto}" disabled=""></td>
                 </tr>
  <tr>  
                  <th align="right"> monto </th><th>:</th>
                <td><input type="text" name="nombres" value="{$r.monto}" disabled=""></td>
                 </tr><th align="right"> monto disponible </th><th>:</th>
                <td><input type="text" name="nombres" value="{$r.monto_dis}" disabled=""></td>
                 </tr>


                          {/foreach}
           
        </table>
      </td>
  </tr>
</table>
    </center>
    
</body>
</html>
