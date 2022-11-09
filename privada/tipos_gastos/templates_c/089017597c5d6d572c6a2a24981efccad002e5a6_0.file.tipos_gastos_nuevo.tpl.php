<?php
/* Smarty version 3.1.36, created on 2022-07-07 16:53:37
  from 'C:\wamp64\www\sis_cuentas_domicilio\privada\tipos_gastos\templates\tipos_gastos_nuevo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62c747d13e9db8_20608943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '089017597c5d6d572c6a2a24981efccad002e5a6' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_cuentas_domicilio\\privada\\tipos_gastos\\templates\\tipos_gastos_nuevo.tpl',
      1 => 1657227211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c747d13e9db8_20608943 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../../css/colores.css">
    <meta charset="UTF-8">
    <?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/tipo_de_gastos.js"><?php echo '</script'; ?>
>
</head>
<body>
    <div class="estil">
    <form action="tipos_gastos_nuevo1.php" method="post" name="tipo_gasto" class="estiloin">
   
            <p><h1>TIPOS DE GASTOS</h1></p>   
            <p>TIPO DE GASTO<input type="text" name="tipo_gasto" placeholder="tipo de gasto" size="15" class="otro"onkeyup="this.value=this.value.toUpperCase()" >(*)</p>          
            
                <input type="hidden" name="accion" value="">

                 <input type="button" name="aceptar"  onclick="validar();" class="bt" value="aceptar">

                  <input type="button" name="cancelar" onclick="javascript:location.href='tipos_gastos.php';" class="tb" value="CANCELAR">
            </p>
            <p>
                <b>(*)Campos Obligatorios</b>
            </p>
                                   
         

    </form>
    </div>
</body>
</html><?php }
}
