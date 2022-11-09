<?php
/* Smarty version 3.1.36, created on 2022-05-27 02:46:00
  from 'C:\wamp\www\sis_cuentas_domicilio\privada\ingresos_economicos\templates\ingresos_economicos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62901f4885b689_98211237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b4e3577fe64221e462d8fd46cd218035441e62d' => 
    array (
      0 => 'C:\\wamp\\www\\sis_cuentas_domicilio\\privada\\ingresos_economicos\\templates\\ingresos_economicos.tpl',
      1 => 1653612011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62901f4885b689_98211237 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
</head>
<body>
	<table width="100%" border="0">
		<tr>
			<td width="33%">
			<table border="0">
				<tr>
		
				</tr>
			</table> 		
			</td>
			<td align="center" width="33%">
				<h1>INGRESOS ECONOMICOS</h1>
			</td>
			<td align="right" width="33%">
				<form name="formuNuevo" method="post" action="ingreso_economico_nuevo.php">
					<a href="javascript:document.formuNuevo.submit()">
						<table>
					<tr>
					<th>
						<img src="../../imagenes/nuevo.png" width="15%" >
						 <br>Nuevo
					</th>
				</tr>
				</table>
					</a>
				</form>
			</td>
		</tr>	
	</table>
	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>NRO CASA</th><th>DESCRIPCION</th><th>FECHA</th><th>MONTO</th><th>MONTO DISPONIBLE</th>
				<th><img src="../../imagenes/modificar.png" ></th><th><img src="../../imagenes/borrar1.jpg" ></th>
			</tr>

			<?php $_smarty_tpl->_assignInScope('b', '1');?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ingresos_economicos']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>

			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['numero_casa'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['descripcion'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['fecha_ingreso'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['monto'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['monto_dis'];?>
</td>
				<td align="center">
					<form name="formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['ingreso_economico_pk'];?>
" method="post" action="ingreso_modificar.php">
						<input type="hidden" name="ingreso_economico_pk" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['ingreso_economico_pk'];?>
">
						<input type="hidden" name="domicilio_pk" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['domicilio_pk'];?>
">
						<input type="hidden" name="efectivo_disponible_pk" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['efectivo_disponible_pk'];?>
">
						<a href="javascript:document.formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['ingreso_economico_pk'];?>
.submit();" title="modificar ingreso economico">
							modificar>>>>>
						</a>						
					</form>					
				</td>
				<td align="center">
					<form name="formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['ingreso_economico_pk'];?>
" method="post" action="ingreso_eliminar.php">
						<a href="javascript:document.formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['ingreso_economico_pk'];?>
.submit();" title="eliminar ingreso economico"
						onclick='javascript:return(confirm("desea realmente eliminar al ingreso economico:::<?php echo $_smarty_tpl->tpl_vars['r']->value['ingreso_economico_pk'];?>
..?"));'>eliminar>>						
						</a>						
					</form>				
				</td>
				<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tr>
		</table>
	</center>
</body>
</html><?php }
}
