<?php
/* Smarty version 3.1.36, created on 2022-09-08 16:38:51
  from 'C:\wamp64\www\Nueva\sis_cuentas_domicilio\privada\reportes\templates\personas_usuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_631a1a9b5e75e1_34001143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba230bc3f6aaffcee86086791fb690b7319930d3' => 
    array (
      0 => 'C:\\wamp64\\www\\Nueva\\sis_cuentas_domicilio\\privada\\reportes\\templates\\personas_usuarios.tpl',
      1 => 1656634204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_631a1a9b5e75e1_34001143 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
	<?php echo '<script'; ?>
 type="text/javascript">
		var ventanaCalendario=false
		function imprimir(){
			ventanaCalendario =window.open("personas_usuarios1.php" , "calendario","width=600, height-550,left-100,top-100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
		}
	<?php echo '</script'; ?>
>
	
</head>
<body>
	<table width="100%" border="0">
		<tr>
			<td align="center"><h1>PERSONAS_USUARIOS</h1></td>
		</tr>
	</table>
	<br>
	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>PERSONAS</th><th>NOMBRE DE USUARIO</th>
			</tr>
				<?php $_smarty_tpl->_assignInScope('b', "1");?>
	            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personas_usuarios']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
	            <tr>
	            	<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];
echo $_smarty_tpl->tpl_vars['r']->value['apellido_paterno'];
echo $_smarty_tpl->tpl_vars['r']->value['apellido_materno'];?>
</td>
				    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['usuario1'];?>
</td>
				   <?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
				    
	            </tr>
	            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
		<br><br>
		<h2>
			<input type="radio" name="seleccionar" onclick="javascript:imprimir()">Imprimir
		</h2>
	</center>
</body>
</html><?php }
}
