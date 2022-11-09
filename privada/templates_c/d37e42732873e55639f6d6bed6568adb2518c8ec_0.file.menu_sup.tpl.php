<?php
/* Smarty version 3.1.36, created on 2022-09-07 14:53:50
  from 'C:\wamp64\www\Nueva\sis_cuentas_domicilio\privada\templates\menu_sup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6318b07ec32207_51583908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd37e42732873e55639f6d6bed6568adb2518c8ec' => 
    array (
      0 => 'C:\\wamp64\\www\\Nueva\\sis_cuentas_domicilio\\privada\\templates\\menu_sup.tpl',
      1 => 1659680392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6318b07ec32207_51583908 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
 <head>
	<link rel="stylesheet"href="<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
</head>
<body>
	<div class="cabecera">
		<img src="../../sis_cuentas_domicilio/privada/sistema/logo/<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="9%">
		
		<div class="titulo">
			
				SISTEMA"<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
"		
		</div>
		<div class="usuario">
		usuario: <b><?php echo $_smarty_tpl->tpl_vars['sesion']->value['usuario'];?>
</b>
			rol: <b><?php echo $_smarty_tpl->tpl_vars['sesion']->value['rol'];?>
</b>	
	    </div>
	</div>
  </body>
</html><?php }
}
