<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../{$direc_css}"type="text/css">
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
            <h1>PROPIETARIOS CON FECHAS</h1>
        </td>
        </tr>
    </table>
    <br>
    <center>
        <table border="1" cellspacing="0">
            <tr>
                <th>NRO</th><th>PERSONAS</th><th>FECHA DE NACIMIENTO</th>
            </tr>
            {assign var="b" value="1"}
            {foreach item=r from=$propietario_fechas1}
            <tr>
                <td align="center">{$b}</td>
                <td>{$r.nombre} {$r.apellido_paterno} {$r.apellido_materno}</td>
                <td><i>{$r.fecha_nacimiento}</i>></td>
                {assign var="b" value="`$b+1`"}
            {/foreach}
            </tr>
        </table>
        <br><br>
    </center>
    <b>DEL:</b>{$fechas1} <b>A</b>{$fechas2}
</body>
</html>
