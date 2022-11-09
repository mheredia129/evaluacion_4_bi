<?php
/* Smarty version 3.1.36, created on 2022-05-15 01:06:21
  from 'C:\wamp64\www\sis_cuentas_domicilio\privada\claves\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6280520d8a0bc0_35993039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68ee1634fbe9c96a92989b7609e3f77a2f2a34b1' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_cuentas_domicilio\\privada\\claves\\templates\\index.tpl',
      1 => 1652423562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6280520d8a0bc0_35993039 (Smarty_Internal_Template $_smarty_tpl) {
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
