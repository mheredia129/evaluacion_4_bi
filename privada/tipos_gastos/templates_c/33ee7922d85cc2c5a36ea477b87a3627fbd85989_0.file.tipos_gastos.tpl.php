<?php
/* Smarty version 3.1.36, created on 2022-08-12 03:39:47
  from 'C:\xampp\htdocs\sis_cuentas_domicilio\privada\tipos_gastos\templates\tipos_gastos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62f5af633ce864_02530340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33ee7922d85cc2c5a36ea477b87a3627fbd85989' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sis_cuentas_domicilio\\privada\\tipos_gastos\\templates\\tipos_gastos.tpl',
      1 => 1652427818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62f5af633ce864_02530340 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
</head>
<body>
	<div class="titulo_listado">
		<h1>
			TIPOS DE GASTOS
		</h1>
		
	</div>
	<div class="titulo_nuevo">
		<form name="formuNuevo" method="post" action="tipos_gastos_nuevo.php">
			<a href="javascript:document.formuNuevo.submit();">
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
	</div>
	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>TIPO DE GASTO REALIZADO</th>
				<th><img src="../../imagenes/modificar.png" ></th><th><img src="../../imagenes/borrar1.jpg" ></th>
			</tr>
			<?php $_smarty_tpl->_assignInScope('b', "0");?>
			<?php $_smarty_tpl->_assignInScope('total', ((string)($_smarty_tpl->tpl_vars['pagina']->value-1)));?>
			<?php $_smarty_tpl->_assignInScope('a', ((string)($_smarty_tpl->tpl_vars['numreg']->value*$_smarty_tpl->tpl_vars['total']->value)));?>
			<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1+$_smarty_tpl->tpl_vars['a']->value)));?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipos_gastos']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['r']->value['tipo_gasto'];?>
</td>
		
				<td align="center">
					<form name="formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['tipo_gasto_pk'];?>
" method="post" action="tipos_gastos_modificar.php">
						<input type="hidden" name="tipo_gasto_pk" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['tipo_gasto_pk'];?>
">
						<a href="javascript:document.formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['tipo_gasto_pk'];?>
.submit();" title="modificar tipo de gastos sistema">
							modificar>>>
						</a>
					</form>
				</td>
				<td align="center">
					<form name="formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['tipo_gasto_pk'];?>
" method="post" action="tipos_gastos_eliminar.php">
						<input type="hidden" name="tipo_gasto_pk" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['tipo_gasto_pk'];?>
">
						<a href="javascript:document.formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['tipo_gasto_pk'];?>
.submit();" title="eliminar tipos gastos del sistema" onclick="javascript:return(confirm('desea realmente eliminar al tipo de gasto..?')); location.href='tipos_gastos_eliminar.php'">
							eliminar>>>
						</a>
					</form>
				</td>
				<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tr>
		</table>

		<table>
			<tr align="center">
				<td>
					<?php if (!empty($_smarty_tpl->tpl_vars['urlback']->value)) {?>
					<a onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['urlback']->value;?>
'" style="font-family: Verdana;font-size: 20px;cursor:pointer";>&laquo;Anterior</a>
				<?php }?>
				<?php if (!empty($_smarty_tpl->tpl_vars['paginas']->value)) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paginas']->value, 'pag');
$_smarty_tpl->tpl_vars['pag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pag']->value) {
$_smarty_tpl->tpl_vars['pag']->do_else = false;
?>
					<?php if ($_smarty_tpl->tpl_vars['pag']->value['npag'] == $_smarty_tpl->tpl_vars['pagina']->value) {?>
						<?php if ($_smarty_tpl->tpl_vars['pagina']->value != '1') {?>-|-<?php }?><b style="color:#e8eb2d94;font-size: 40px; "><?php echo $_smarty_tpl->tpl_vars['pag']->value['npag'];?>
</b>
					<?php } else { ?>
					-|- <a onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['pag']->value['pagV'];?>
'" style="cursor: pointer; "><?php echo $_smarty_tpl->tpl_vars['pag']->value['npag'];?>
</a>
					<?php }?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['numpaginas']->value > $_smarty_tpl->tpl_vars['numbotones']->value && !empty($_smarty_tpl->tpl_vars['urlnext']->value) && $_smarty_tpl->tpl_vars['pagina']->value < $_smarty_tpl->tpl_vars['numpaginas']->value) {?>
					-|- <a onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['urlnext']->value;?>
'" style="font-family: century gothic; font-size: 20px; cursor: pointer">Siguinte&raquo;</a>
					<?php }?>
				</td>
			</tr>
		</table>
	</center>
	
</body>
</html><?php }
}
