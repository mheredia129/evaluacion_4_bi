<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
              var ventanaCalendario = false
              function imprimir() {
                   if(confirm(' Desea Imprimir ?')){
               window.print();
            } 
 }
 
</script>
</head>
<body style='cursor:pointer;cursor:hand' onclick='imprimir();'>

<table width="100%" border="0">
 <tr>
        <td><img src="../../imagenes/{$logo}" width="70%" alt=""></td>
        <td aling="center"  width="80%"  ><h1>PERSONAS USUARIOS</h1> </td>
 </tr>
</table>
 <br>
 <center>
  <table border="1" cellpadding="0">
               <tr>
                    <th>NRO</th><th>MONTO</th><th>DESCRIPCION</th><th>FECHA DE INGRESO</th><th>NRO DE CASA</th> <th>EFECTIVO DISPONIBLE</th>
               </tr>
                    {assign var="b" value="1"}
                 {foreach item=r from=$ingresos_economicos}
                 <tr>
                    <td align="center">{$b}</td>
                        <td>{$r.monto}</td>
                        <td>{$r.descripcion}</td>
                        <td>{$r.fecha_ingreso}</td>
                        <td>{$r.numero_casa}</td>
                        <td>{$r.monto_dis}</td>
                       {assign var="b" value="`$b+1`"}
                        
                 </tr>
                 {/foreach}
          </table>
  <br>
  <br>
  <b>Fecha:</b>{$fecha}
 </center>
</body>
</html>