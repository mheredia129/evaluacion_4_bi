<?php
/* Smarty version 3.1.36, created on 2022-08-10 03:16:09
  from 'C:\xampp\htdocs\sis_cuentas_domicilio\privada\templates\menu_sup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62f306d902e351_00236260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b489a70ec94e8506734eda1c0f80bfd871a760d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sis_cuentas_domicilio\\privada\\templates\\menu_sup.tpl',
      1 => 1659680392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62f306d902e351_00236260 (Smarty_Internal_Template $_smarty_tpl) {
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
