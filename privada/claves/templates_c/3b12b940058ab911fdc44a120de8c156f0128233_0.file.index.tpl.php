<?php
/* Smarty version 3.1.36, created on 2022-08-10 03:16:11
  from 'C:\xampp\htdocs\sis_cuentas_domicilio\privada\claves\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62f306db74fc81_20845753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b12b940058ab911fdc44a120de8c156f0128233' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sis_cuentas_domicilio\\privada\\claves\\templates\\index.tpl',
      1 => 1652423562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62f306db74fc81_20845753 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
	<?php echo '<script'; ?>
 type="text/javascript">
		function refrescar(){
			var p= window.parent;
			p.location.href='../';
		}
	<?php echo '</script'; ?>
>
</head>
<body ONLOAD = "self.setTimeout('refrescar()',2000);">
	<center>
		<h1><?php echo $_smarty_tpl->tpl_vars['mensage']->value;?>
</h1>
		<h2 class="v"><?php echo $_smarty_tpl->tpl_vars['nom_completo']->value;?>
</h2>
		<br>
		<h1><?php echo $_smarty_tpl->tpl_vars['mensage1']->value;?>
</h1>
	</center>

	

</body>
</html><?php }
}
