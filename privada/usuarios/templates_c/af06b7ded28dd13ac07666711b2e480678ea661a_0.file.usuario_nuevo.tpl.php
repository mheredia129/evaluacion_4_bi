<?php
/* Smarty version 3.1.36, created on 2022-05-20 16:31:14
  from 'C:\wamp64\www\sis_cuentas_domicilio\privada\usuarios\templates\usuario_nuevo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6287c252655c57_81564394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af06b7ded28dd13ac07666711b2e480678ea661a' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_cuentas_domicilio\\privada\\usuarios\\templates\\usuario_nuevo.tpl',
      1 => 1653064269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6287c252655c57_81564394 (Smarty_Internal_Template $_smarty_tpl) {
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
</head>
<body>
    <div class="estil">
    <form action="usuario_nuevo1.php" method="post" name="usuario_nuevo" class="estiloin">
   
            <p><h1>REGISTRAR USUARIO</h1></p> 
            <b>Persona (*)</b>
            <select name="persona_pk">
                <option value=""> selecione</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['persona']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['persona_pk'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['apellido_paterno'];?>
--<?php echo $_smarty_tpl->tpl_vars['r']->value['apellido_materno'];?>
--<?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>  
                     
            <p>USUARIO<input type="text" size="15"name="usuario"  class="otro" >(*)</p>            
            <p>CLAVE<br><input type="password" name="clave" size="15" class="otro">(*)</p>
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
