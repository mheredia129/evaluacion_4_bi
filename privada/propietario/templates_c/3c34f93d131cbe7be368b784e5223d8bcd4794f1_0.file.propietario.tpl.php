<?php
/* Smarty version 3.1.36, created on 2022-08-12 03:15:28
  from 'C:\xampp\htdocs\sis_cuentas_domicilio\privada\propietario\templates\propietario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62f5a9b0acab52_69374289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c34f93d131cbe7be368b784e5223d8bcd4794f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sis_cuentas_domicilio\\privada\\propietario\\templates\\propietario.tpl',
      1 => 1660266217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62f5a9b0acab52_69374289 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/buscar_propietario.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="titulo_listado">
		<h1>
			PROPIETARIOS
		</h1>
		
	</div>
	<div class="titulo_nue">
		<form name="formuNuevo" method="post" action="propietario_nuevo.php">
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
		<form action="#" method="post" name="formu">
			<table border="1" class="estiloin">
				<tr>
					<th>
						<b>paterno</b><br> 
						<input type="text" name="paterno" value="" size="10" onkeyUp="buscar_propietario()">
					</th>
					<th>
						<b>materno</b><br> 
						<input type="text" name="materno" value="" size="10" onkeyUp="buscar_propietario()">
					</th>
					<th>
						<b>nombre</b><br> 
						<input type="text" name="nombre" value="" size="10" onkeyUp="buscar_propietario()">
					</th>
					<th>
						<b>numero de celular</b><br> 
						<input type="text" name="num_cel" value="" size="10" onkeyUp="buscar_propietario()">
					</th>
				</tr>				
			</table>
		</form>
	</center>




	<center>
      <div id="propietario1">





		<table class="listado">
			<tr>
				<th>NRO</th><th>NOMBRES</th><th>APELLIDO PATERNO</th><th>APELLIDO MATERNO</th><th>FECHA DE NACIMIENTO</th> <th>CELULAR</th>
				<th><img src="../../imagenes/modificar.png" ></th><th><img src="../../imagenes/borrar1.jpg" ></th>
			</tr>
			<?php $_smarty_tpl->_assignInScope('b', "0");?>
			<?php $_smarty_tpl->_assignInScope('total', ((string)($_smarty_tpl->tpl_vars['pagina']->value-1)));?>
			<?php $_smarty_tpl->_assignInScope('a', ((string)($_smarty_tpl->tpl_vars['numreg']->value*$_smarty_tpl->tpl_vars['total']->value)));?>
			<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1+$_smarty_tpl->tpl_vars['a']->value)));?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['propietario']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</td>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['r']->value['apellido_paterno'];?>
</td>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['r']->value['apellido_materno'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['fecha_nacimiento'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['numero_celular'];?>
</td>
				<td align="center">
					<form name="formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['propietario_pk'];?>
" method="post" action="propietario_modificar.php">
						<input type="hidden" name="propietario_pk" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['propietario_pk'];?>
">
						<a href="javascript:document.formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['propietario_pk'];?>
.submit();" title="modificar propietario sistema">
							modificar>>>
						</a>
					</form>
				</td>
				<td align="center">
					<form name="formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['propietario_pk'];?>
" method="post" action="propietario_eliminar.php">
						<input type="hidden" name="propietario_pk" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['propietario_pk'];?>
">
						<a href="javascript:document.formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['propietario_pk'];?>
.submit();" title="eliminar propietario del sistema" onclick="javascript:return(confirm('desea realmente eliminar al propietario..?')); location.href='propietario_eliminar.php'">
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
'" style="font-family: century gothic;font-size: 20px;cursor:pointer";>&laquo;Anterior</a>
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
	</div>
	</center>
	
</body>
</html><?php }
}
