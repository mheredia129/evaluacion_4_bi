<?php
/* Smarty version 3.1.36, created on 2022-05-22 02:48:57
  from 'C:\wamp64\www\sis_cuentas_domicilio\privada\personas\templates\persona_nuevo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6289a49915c4e8_28494425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6d1ae004b17bb84d3bef94e22ab16ee55eaa302' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_cuentas_domicilio\\privada\\personas\\templates\\persona_nuevo.tpl',
      1 => 1653187691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6289a49915c4e8_28494425 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../../css/colores.css">
    <meta charset="UTF-8">
    <?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/persona_nuevo.js"><?php echo '</script'; ?>
>
</head>
<body>
    <div class="estil">
    <form action="persona_nuevo1.php" method="post" name="persona_nuevo" class="estiloin">
   
            <p><h1>REGISTRAR PERSONA</h1></p>   
            <p>NOMBRES<input type="text" name="nombres" placeholder="nombres" size="15" class="otro"onkeyup="this.value=this.value.toUpperCase()" >(*)</p>          
            <p>APELLIDO PATERNO<input type="text"size="15" name="apellido_paterno"  class="otro" onkeyup="this.value=this.value.toUpperCase()">(*)</p>              
            <p>APELLIDO MATERNO<input type="text"size="15" name="apellido_materno"  class="otro" onkeyup="this.value=this.value.toUpperCase()">(*)</p>              
            <p>NUMERO DE CELULAR<input type="text" size="15"name="numero_de_celular"  class="otro" onkeyup="this.value=this.value.toUpperCase()">(*)</p>            
            <p>CI<br><input type="text" name="ci" size="15" class="otro"></p>
            <p>
                <input type="hidden" name="accion" value="">
                 <input type="button" name="aceptar"  onclick="validar();" class="bt" value="aceptar">
                  <input type="button" name="cancelar" onclick="javascript:location.href='personas.php';" class="tb" value="CANCELAR">
            </p>
            <p>
                <b>(*)Campos Obligatorios</b>
            </p>
                                   
         

    </form>
    </div>
</body>
</html><?php }
}
