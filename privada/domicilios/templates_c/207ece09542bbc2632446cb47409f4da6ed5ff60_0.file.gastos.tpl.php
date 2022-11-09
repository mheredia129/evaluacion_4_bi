<?php
/* Smarty version 3.1.36, created on 2022-04-26 21:06:35
  from 'C:\wamp64\www\sis_cuentas_domicilio\privada\gastos\templates\gastos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62685edb9823b4_22061304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '207ece09542bbc2632446cb47409f4da6ed5ff60' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_cuentas_domicilio\\privada\\gastos\\templates\\gastos.tpl',
      1 => 1651007190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62685edb9823b4_22061304 (Smarty_Internal_Template $_smarty_tpl) {
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
				<h1>GASTOS</h1>
			</td>
			<td align="right" width="33%">
				<form name="formuNuevo" method="post" action="usuario_nuevo.php">
					<a href="javascript:document.formuNuevo.submit()">
						nuevo>>>>
					</a>
				</form>
			</td>
		</tr>	
	</table>
	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>NRO CASA</th><th>TIPO DE GASTO</th><th>DESCRIPCION</th><th>FECHA</th><th>MONTO</th><th>MONTO DISPONIBLE</th>
				<th><img src="../../imagenes/modificar.png" ></th><th><img src="../../imagenes/borrar1.jpg" ></th>
			</tr>

			<?php $_smarty_tpl->_assignInScope('b', '1');?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gastos']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>

			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['numero_casa'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['tipo_gasto'];?>
 </td> 
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['descripcion'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['fecha_gasto'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['monto'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['monto_dis'];?>
</td>
				<td align="center">
					<form name="formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['gasto_pk'];?>
" method="post" action="usuario_modificar.php">
						<input type="hidden" name="gasto_pk" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['gasto_pk'];?>
">
						<input type="hidden" name="domicilio_pk" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['domicilio_pk'];?>
">
						<input type="hidden" name="tipo_gasto_pk" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['tipo_gasto_pk'];?>
">
						<input type="hidden" name="efectivo_disponible_pk" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['efectivo_disponible_pk'];?>
">
						<a href="javascript:document.formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['gasto_pk'];?>
.submit();" title="modificar gasto">
							modificar>>>>>
						</a>						
					</form>					
				</td>
				<td align="center">
					<form name="formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['gasto_pk'];?>
" method="post" action="gasto_eliminar.php">
						<a href="javascript:document.formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['gasto_pk'];?>
.submit();" title="eliminar gasto"
						onclick='javascript:return(confirm("desea realmente eliminar al gasto:::<?php echo $_smarty_tpl->tpl_vars['r']->value['gasto_pk'];?>
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
