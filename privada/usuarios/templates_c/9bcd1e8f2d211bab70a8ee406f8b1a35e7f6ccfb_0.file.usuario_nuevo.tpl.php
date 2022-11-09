<?php
/* Smarty version 3.1.36, created on 2022-09-02 03:49:40
  from 'C:\xampp\htdocs\sis_cuentas_domicilio\privada\usuarios\templates\usuario_nuevo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6311613404fff5_86894507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bcd1e8f2d211bab70a8ee406f8b1a35e7f6ccfb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sis_cuentas_domicilio\\privada\\usuarios\\templates\\usuario_nuevo.tpl',
      1 => 1662083374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6311613404fff5_86894507 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../../css/colores.css">
    <meta charset="UTF-8">
    <?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/usuario_nuevo.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        
function buscar(){
var d1,url,contenedor;
contenedor = document.getElementById('personas1');
contenedor2 = document.getElementById('persona_selecionado');
contenedor3 = document.getElementById('persona_insertado');
d1 = document.formu.paterno.value;
d2 =document.formu.materno.value;
d3 =document.formu.nombre.value;
d4 =document.formu.ci.value;
ajax = nuevoAjax();
url = "ajax_buscar_personas.php"
param = "paterno="+d1+"&materno="+d2+"&nombre="+d3+"&ci="+d4;
ajax.open("POST", url, true);
ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
ajax.onreadystatechange = function(){
    if (ajax.readyState == 4){
        contenedor.innerHTML = ajax.responseText;
          contenedor2.innerHTML = "";
            contenedor3.innerHTML =  "";
    }
}
ajax.send(param);
}


    <?php echo '</script'; ?>
>
</head>
<body>
    <div class="estil">
         <p><h1>REGISTRAR USUARIO</h1></p>
    <form action="usuario_nuevo1.php" method="post" name="formu" class="estiloin">
        <table border="1">
            <tr>
                <th align="right">
                    selecione persona
                </th>
                
                <td>
                    <table>
                        <tr>
                            <td>
                                <b>paterno</b><br/>
                                <input type="text" name="paterno" value="" size="10" onkeyup="buscar()">
                            </td>
                            <td>
                                <b>materno</b><br/>
                                <input type="text" name="materno" value="" size="10" onkeyup="buscar()">
                            </td>
                            <td>
                                <b>nombres</b><br/>
                                <input type="text" name="nombre" value="" size="10" onkeyup="buscar()">
                            </td>
                            <td>
                                <b>ci</b><br/>
                                <input type="text" name="ci" value="" size="10" onkeyup="buscar()">
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td colspan="3">
                                <div id="personas1"></div>
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
                                <div id="perosna_insertada"></div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
           
                <th align="right">usuario (*)</th>
               
                <td><input type="text" name="usuario"></td>
          
            <tr>
                <th align="right">clave (*)</th>
                <td><input type="password" name="clave"></td>
            </tr>
            <tr>
                <td align="center" colspan="3">
                    <input type="hidden" name="accion" value="">
                 <input type="button" name="aceptar"  onclick="validar();" class="bt" value="aceptar">
                  <input type="button" name="cancelar" onclick="javascript:location.href='usuarios.php';" class="tb" value="CANCELAR">
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td colspan="3" align="center"><b>(*) campos obligatorios</b></td>
            </tr>
        </table>                    
    </form>
    </div>
</body>
</html><?php }
}
