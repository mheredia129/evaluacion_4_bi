<?php
/* Smarty version 3.1.36, created on 2022-06-04 23:30:42
  from 'C:\wamp64\www\sis_cuentas_domicilio\privada\tipo_inmueble\templates\tipo_inmueble_nuevo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_629beb2253e6e5_51889312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04e456a4ca7e7942c8063d852221f9c96768338c' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_cuentas_domicilio\\privada\\tipo_inmueble\\templates\\tipo_inmueble_nuevo.tpl',
      1 => 1653609943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629beb2253e6e5_51889312 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../../css/colores.css">
    <meta charset="UTF-8">
    <?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/tipo_inmueble_nuevo.js"><?php echo '</script'; ?>
>
</head>
<body>
    <div class="estil">
    <form action="tipo_inmueble_nuevo1.php" method="post" name="tipo_inmueble_nuevo" class="estiloin">
   
            <p><h1>TIPO DE INMUEBLE</h1></p>   
            <p>DETALLES  DEL INMUEBLE<input type="text" name="detalle_inmueble" size="15" class="otro"onkeyup="this.value=this.value.toUpperCase()" >(*)</p>          
                <input type="hidden" name="accion" value="">
                 <input type="button" name="aceptar"  onclick="validar();" class="bt" value="aceptar">
                  <input type="button" name="cancelar" onclick="javascript:location.href='tipo_inmueble.php';" class="tb" value="CANCELAR">
            </p>
            <p>
                <b>(*)Campos Obligatorios</b>
            </p>
                                   
         

    </form>
    </div>
</body>
</html><?php }
}
