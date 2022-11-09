<?php
/* Smarty version 3.1.36, created on 2022-05-13 01:06:33
  from 'C:\wamp64\www\sis_cuentas_domicilio\privada\efectivo_disponible\templates\efectivo_disponible.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_627daf19cd4724_21615122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5932bb652ec24bae5c174e74c928ebb1dcc3c62' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_cuentas_domicilio\\privada\\efectivo_disponible\\templates\\efectivo_disponible.tpl',
      1 => 1652403982,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627daf19cd4724_21615122 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
</head>
<body>
	<div class="titulo_listado">
		<h1>
			EFECTIVO DISPONIBLE
		</h1>
		
	</div>
	<div class="titulo_nuevo">
		<form name="formuNuevo" method="post" action="efectivo_disponible_nuevo.php">
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
				<th>NRO</th><th>EFECTIVO DISPONIBLE</th>
				<th><img src="../../imagenes/modificar.png" ></th><th><img src="../../imagenes/borrar1.jpg" ></th>
			</tr>
		    <?php $_smarty_tpl->_assignInScope('b', '1');?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['efectivo_disponible']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['r']->value['monto_dis'];?>
</td>
				
				<td align="center">
					<form name="formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['efectivo_disponible_pk'];?>
" method="post" action="efectivo_disponible_modificar.php">
						<input type="hidden" name="efectivo_disponible_pk" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['efectivo_disponible_pk'];?>
">
						<a href="javascript:document.formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['efectivo_disponible_pk'];?>
.submit();" title="modificar monto sistema">
							modificar>>>
						</a>
					</form>
				</td>
				<td align="center">
					<form name="formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['efectivo_disponible_pk'];?>
" method="post" action="efectivo_disponible_eliminar.php">
						<input type="hidden" name="efectivo_disponible_pk" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['efectivo_disponible_pk'];?>
">
						<a href="javascript:document.formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['efectivo_disponible_pk'];?>
.submit();" title="eliminar el monto del sistema" onclick="javascript:return(confirm('desea realmente eliminar al efectivo disponible..?')); location.href='efectivo_disponible_eliminar.php'">
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

	
	</center>
	
</body>
</html><?php }
}
