<?php
/* Smarty version 3.1.36, created on 2022-09-08 17:06:04
  from 'C:\wamp64\www\sis_cuentas_domicilio\privada\reportes\templates\ingresos_economicos_fechas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_631a20fc30a1b2_47411142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db8adad5f954b787bc084731fcc7b47d5126120e' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_cuentas_domicilio\\privada\\reportes\\templates\\ingresos_economicos_fechas.tpl',
      1 => 1657239412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_631a20fc30a1b2_47411142 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
	<?php echo '<script'; ?>
 type="text/javascript">
		var ventanaCalendario=false
		function imprimir(){
			ventanaCalendario =window.open("ingresos_economicos_fechas1.php" , "calendario","width=600, height-550,left-100,top-100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
		}
	<?php echo '</script'; ?>
>
	
</head>
<body>
	<table width="100%" border="0">
		<tr>
			<td align="center"><h1>INGRESOS ECONOMICOS</h1></td>
		</tr>
	</table>
	<br>
	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>MONTO</th><th>DESCRIPCION</th><th>FECHA DE INGRESO</th><th>NRO DE CASA</th> <th>EFECTIVO DISPONIBLE</th>
			</tr>
				<?php $_smarty_tpl->_assignInScope('b', "1");?>
	            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ingresos_economicos']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
	            <tr>
	            	<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['monto'];?>
</td>
				    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['descripcion'];?>
</td>
				    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['fecha_ingreso'];?>
</td>
				    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['numero_casa'];?>
</td>
				    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['monto_dis'];?>
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
