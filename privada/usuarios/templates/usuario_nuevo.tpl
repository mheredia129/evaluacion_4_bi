<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../{$direc_css}">
    <script type="text/javascript" src="../js/expresiones_regulares.js"></script>
    <script type="text/javascript" src="../js/validar_usuario.js"></script>
    <script type="text/javascript" src="../../ajax.js"></script>
    <script type="text/javascript">
        function buscar(){
            
            var d1, contenedor, url;
            contenedor = document.getElementById('personas');
            contenedor2 = document.getElementById('persona_seleccionado');
            contenedor3 = document.getElementById('persona_insertado');
            
            d1 = document.formu.ap.value;
            d2 = document.formu.am.value;
            d3 = document.formu.nombres.value;
            d4 = document.formu.ci.value;

            ajax = nuevoAjax();
            url = "ajax_buscar_persona.php"
            param = "ap="+d1+"&am="+d2+"&nombres="+d3+"&ci="+d4;
            ajax.open("POST",url,true);
            ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            ajax.onreadystatechange = function(){
                if (ajax.readyState == 4){
                    contenedor.innerHTML = ajax.responseText;
                    contenedor2.innerHTML = "";
                    contenedor3.innerHTML = "";
                }
            }
            ajax.send(param);
        }
        function buscar_persona(persona_pk){
            var d1, contenedor, url;
            contenedor = document.getElementById('persona_seleccionado');
            contenedor2 = document.getElementById('personas');
            document.formu.persona_pk.value = persona_pk;

            d1 = persona_pk;

            ajax = nuevoAjax();
            url = "ajax_buscar_persona1.php"
            param = "persona_pk="+d1;
            ajax.open("POST", url, true);
            ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            ajax.onreadystatechange = function(){

                if (ajax.readyState == 4){
                    contenedor.innerHTML = ajax.responseText;
                    contenedor2.innerHTML = "";
                }
            }
            ajax.send(param);           
        }

        function insertar_persona(){

            var d1, contenedor, url;
            contenedor = document.getElementById('persona_seleccionado');
            contenedor2 = document.getElementById('personas');
            contenedor3 = document.getElementById('persona_insertada');
            d1 = document.formu.ap1.value;
            d2 = document.formu.am1.value;
            d3 = document.formu.nombres1.value;
            d4 = document.formu.ci1.value;
            d5 = document.formu.direccion1.value;
            d6 = document.formu.telef1.value;
            
            if (d4 == ""){
                alert("El ci es incorrecto o el campo esta vacio");
                document.formu.ci1.focus();
                return;
            }

            if ((d1 == "") && (d2 == "")){
                alert("Por favor introduzca un Apellido");
                document.formu.ap1.focus();
                return;
            }

            if (d3 == ""){
            alert("El nombre es incorrecto o el campo esta vacio");
            document.formu.nombres1.focus();
            return;
            }
            
    
            ajax = nuevoAjax();
            url = "ajax_inserta_persona.php";
            
            param = "ap1="+d1+"&am1="+d2+"&nombres1="+d3+"&ci1="+d4+"&direccion1="+d5+"&telef1="+d6;
          
            
            ajax.open("POST",url,true);

            ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            
            ajax.onreadystatechange = function(){
                if (ajax.readyState == 4){
                    contenedor.innerHTML = "";
                    contenedor2.innerHTML = "";
                    contenedor3.innerHTML = ajax.responseText;
                }
            }
            ajax.send(param);
        }
    </script>
</head>
<body>
    <h1>REGISTAR USUARIO</h1>
    <center>
    <form action="usuario_nuevo1.php" method="post" name="formu">
        <table border="1">
            <tr>
                <th align="rigth">Seleccione Persona(*)</th>
                <th>:</th>
                <td>
                    <table>
                        <tr>
                            <td>
            <b>Paterno</b><br>
            <input type="text" name="ap" value="" size="10" onkeyup="buscar()">
            </td>
            <td>
            <b>Materno</b><br>
                <input type="text" name="am" value="" size="10" onkeyup="buscar()">
            </td>
            <td>
            <b>Nombres</b><br>
                <input type="text" name="nombres" value="" size="10" onkeyup="buscar()">
            </td>
            <td>
            <b>C.I.</b><br>
                <input type="text" name="ci" value="" size="10" onkeyup="buscar()">
            </td>
                        </tr>
                    </table>
                </td>
            </tr>
<tr>
    <td colspan="6">
        <table width="100%">
            <tr>
                <td colspan="3">
                    <div id="personas"></div>                   
                </td>
            </tr>       
        </table>
    </td>
</tr>
<tr>
    <td colspan="6">
        <table width="100%">
            <tr>
                <td colspan="3">
                    <div id="persona_seleccionado"></div>
                </td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td colspan="6">
        <table width="100%">
            <tr>
                <td colspan="3">
                    <input type="hidden" name="persona_pk">
                    <div id="persona_insertada"></div>
                </td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <th align="rigth">Usuario(*)</th>
    <th>:</th>
    <td><input type="text" name="usuario"></td>
</tr>
<tr>
    <th align="rigth">Clave(*)</th>
    <th>:</th>
    <td><input type="password" name="clave"></td>
</tr>
<tr>
<td align="center" colspan="3">
    <input type="hidden" name="accion" value="">
    <input type="button" value="Aceptar" onclick="validar();">
    <input type="button" value="Cancelar" onclick="javascript.location.href='usuarios.php';">
</td>
</tr>
</table>
<table>
    <tr>
        <td colspan="3" align="center"><b>(*)Campos Obligatorios</b></td>
    </tr>
</table>
    </form>
    </center>
</body>
</html>
