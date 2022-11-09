<?php
/* Smarty version 3.1.36, created on 2022-09-07 14:53:50
  from 'C:\wamp64\www\Nueva\sis_cuentas_domicilio\privada\templates\cuerpo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6318b07ecdee05_01907388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2a06bddd731cc6fdd1934c1a943912fe23a450c' => 
    array (
      0 => 'C:\\wamp64\\www\\Nueva\\sis_cuentas_domicilio\\privada\\templates\\cuerpo.tpl',
      1 => 1652064572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6318b07ecdee05_01907388 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<head>
	<link rel="stylesheet"href="<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
</head>
<body >
	<form action="claves/" method="POST" target="cuerpo">
		<?php if ($_smarty_tpl->tpl_vars['nick']->value == '') {?>
		<div class="formu_ingreso">
			<p><h1>Ingresar al sistema</h1></p>
			<p>Usuario:<input type="text" name="hi" class="otro" placeholder="ingrese su usuario"></p>
			<p>Contraseña: <input type="password" name="password" class="otro" placeholder="ingrese su contraseña"></p>
			<input type="submit" name="accion" value="Ingresar" class="otro">
		</div>
		<?php }?>
	</form>
</body>
</html><?php }
}
