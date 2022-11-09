<?php
/* Smarty version 3.1.36, created on 2022-08-12 04:08:16
  from 'C:\xampp\htdocs\sis_cuentas_domicilio\privada\gastos\templates\gastos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62f5b610432419_22724901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee860c37747de3ca6951674afc8fd88bb26e29af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sis_cuentas_domicilio\\privada\\gastos\\templates\\gastos.tpl',
      1 => 1660270093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62f5b610432419_22724901 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/buscar_gasto.js"><?php echo '</script'; ?>
>
	 <link rel="stylesheet" type="text/css" href="../calendario/tcal.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="../calendario/tcal.js"><?php echo '</script'; ?>
>
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
				<form name="formuNuevo" method="post" action="gastos_nuevo.php">
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
		<form action="#" method="post" name="formu">
			<table border="1" class="estiloin">
				<tr>
					<th>
						<b>descripcion</b><br> 
						<input type="text" name="desc" value="" size="10" onkeyUp="buscar_gasto()">
					</th>
					<th>
						<b>fecha gasto</b><br> 
						 <input type="date" name="dec_gas" class="tcal" value="" size="10" onkeyUp="buscar_gasto()">
						
					</th>
					<th>
						<b>monto</b><br> 
						<input type="text" name="mont" value="" size="10" onkeyUp="buscar_gasto()">
					</th>
					
				</tr>				
			</table>
		</form>
	</center>


	<center>
		<div id="gasto1">
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
" method="post" action="gastos_modi.php">
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
" method="post" action="gastos_eliminar.php">
							<input type="hidden" name="gasto_pk" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['gasto_pk'];?>
">
						<a href="javascript:document.formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['gasto_pk'];?>
.submit();" title="eliminar gasto"
						onclick='javascript:return(confirm("desea realmente eliminar ael gasto:::<?php echo $_smarty_tpl->tpl_vars['r']->value['gasto_pk'];?>
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
	</div>
	</center>
</body>
</html><?php }
}
