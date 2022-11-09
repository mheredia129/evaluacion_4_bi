<?php
/* Smarty version 3.1.36, created on 2022-06-04 23:27:20
  from 'C:\wamp64\www\sis_cuentas_domicilio\privada\ingresos_economicos\templates\ingreso_economico_modi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_629bea58ea9dd2_30418309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2c5168fc2ebe9bde8ad88764f323b6ba26f404f' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_cuentas_domicilio\\privada\\ingresos_economicos\\templates\\ingreso_economico_modi.tpl',
      1 => 1654384892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629bea58ea9dd2_30418309 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" type="text/css" href="../calendario/tcal.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="../calendario/tcal.js"><?php echo '</script'; ?>
>
</head>
<body>

<div class="estil">  

	<form action="ingreso_economico_modi1.php" method="post" name="ingreso_economico_nuevo" class="estiloin">
		<table>
				<p><h1>MODIFICAR USUARIO</h1></p> 
                       <b>nro de casa (*)</b>
					<select name="domicilio_pk">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d1']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['domicilio_pk'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['numero_casa'];?>
-<?php echo $_smarty_tpl->tpl_vars['r']->value['direccion'];?>
- 
						</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d2']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['domicilio_pk'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['numero_casa'];?>
-<?php echo $_smarty_tpl->tpl_vars['r']->value['direccion'];?>
-
						</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select><br>
					     <b>efectivo disponibe (*)</b>
					<select name="efectivo_disponible_pk">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ed1']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['efectivo_disponible_pk'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['monto_dis'];?>
-
						</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ed2']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['efectivo_disponible_pk'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['monto_dis'];?>
-
						</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>				
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ingresos_economicos']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			    <p>MONTO<input type="text" size="15"name="monto_in"  class="otro" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['monto'];?>
" >(*)</p> 

               <p>DESCRIPCION<br><textarea name="desc_in" cols="40" rows="5"  placeholder="<?php echo $_smarty_tpl->tpl_vars['r']->value['descripcion'];?>
"></textarea>(*)</p>
                <p> 
                <p>
                    <input type="text" name="date" placeholder="fecha del ingreso del monto"class="tcal" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['fecha_ingreso'];?>
">
                </p>

					<input type="hidden" name="accion" value="">
					<input type="hidden" name="ingreso_economico_pk" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['ingreso_economico_pk'];?>
">

					<input type="button" value="Actualizar"   value="" onclick="validar();" class="bt">
					<input type="button" value="Cancelar" onclick="javascript:location.href='ingresos_economicos.php';" class="tb">
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
		
	</form>
</div>
</body>
</html><?php }
}
