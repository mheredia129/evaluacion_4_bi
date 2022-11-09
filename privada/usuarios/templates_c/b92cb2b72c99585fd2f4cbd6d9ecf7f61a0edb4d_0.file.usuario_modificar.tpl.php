<?php
/* Smarty version 3.1.36, created on 2022-06-02 16:59:22
  from 'C:\wamp64\www\sis_cuentas_domicilio\privada\usuarios\templates\usuario_modificar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6298ec6a32e333_82956226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b92cb2b72c99585fd2f4cbd6d9ecf7f61a0edb4d' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_cuentas_domicilio\\privada\\usuarios\\templates\\usuario_modificar.tpl',
      1 => 1654188967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6298ec6a32e333_82956226 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../css/colores.css">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/usuario_nuevo.js"><?php echo '</script'; ?>
>
</head>
<body>

<div class="estil">  

	<form action="usuario_modificar1.php" method="post" name="usuario_nuevo" class="estiloin">
		<table>
				<p><h1>MODIFICAR USUARIO</h1></p> 
                       <b>Persona (*)</b>
					<select name="persona_pk">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['persona']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['persona_pk'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['apellido_paterno'];?>
-<?php echo $_smarty_tpl->tpl_vars['r']->value['apellido_materno'];?>
- <?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personas']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['persona_pk'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['apellido_paterno'];?>
-<?php echo $_smarty_tpl->tpl_vars['r']->value['apellido_materno'];?>
-
						<?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>			
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuario']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
				<p>USUARIO<input type="text" name="usuario" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['usuario1'];?>
" class="otro"> </p>
	            <p>CLAVE<input type="text" name="clave"  value="<?php echo $_smarty_tpl->tpl_vars['r']->value['clave'];?>
" class="otro"> </p>
					<input type="hidden" name="accion" value="">
					<input type="hidden" name="usuario_pk" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['usuario_pk'];?>
">
					<input type="button" value="Actualizar"   value="" onclick="validar();" class="bt">
					<input type="button" value="Cancelar" onclick="javascript:location.href='usuarios.php';" class="tb">
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
		
	</form>
</div>
</body>
</html><?php }
}
