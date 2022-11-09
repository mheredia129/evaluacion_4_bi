<?php
/* Smarty version 3.1.36, created on 2022-08-10 03:16:09
  from 'C:\xampp\htdocs\sis_cuentas_domicilio\privada\templates\cuerpo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62f306d904ad40_63854882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a8ce2bf082d28789b0dc42b51a026b0106c7e89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sis_cuentas_domicilio\\privada\\templates\\cuerpo.tpl',
      1 => 1652064572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62f306d904ad40_63854882 (Smarty_Internal_Template $_smarty_tpl) {
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
