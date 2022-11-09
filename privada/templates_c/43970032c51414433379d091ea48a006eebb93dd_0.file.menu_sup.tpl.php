<?php
/* Smarty version 3.1.36, created on 2022-08-05 02:19:54
  from 'C:\wamp64\www\sis_cuentas_domicilio\privada\templates\menu_sup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62ecb68a3120e7_36092895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43970032c51414433379d091ea48a006eebb93dd' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_cuentas_domicilio\\privada\\templates\\menu_sup.tpl',
      1 => 1659680391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ecb68a3120e7_36092895 (Smarty_Internal_Template $_smarty_tpl) {
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
