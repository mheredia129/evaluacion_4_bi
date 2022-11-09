<?php
/* Smarty version 3.1.36, created on 2022-09-08 17:06:31
  from 'C:\wamp64\www\sis_cuentas_domicilio\privada\personas\templates\personas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_631a2117d88984_53217113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba0b39d931b02a7e23d58f8690cae5d82d649b85' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_cuentas_domicilio\\privada\\personas\\templates\\personas.tpl',
      1 => 1660261990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_631a2117d88984_53217113 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/buscar_personas.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="titulo_listado">
		<h1>
			PERSONAS
		</h1>
		
	</div>
	<div class="titulo_nuev">
		<form name="formuNuevo" method="post" action="persona_nuevo.php">
			<a href="javascript:document.formuNuevo.submit();">
				
						<img src="../../imagenes/nuevo.png" width="15%"  >
						 <br>Nuevo
				
			</a>
		</form>
	</div>
	<center>		
		<form action="#" method="post" name="formu">
			<table border="1" class="estiloin">
				<tr>
					<th>
						<b>paterno</b><br> 
						<input type="text" name="paterno" value="" size="10" onkeyUp="buscar_personas()">
					</th>
					<th>
						<b>materno</b><br> 
						<input type="text" name="materno" value="" size="10" onkeyUp="buscar_personas()">
					</th>
					<th>
						<b>nombre</b><br> 
						<input type="text" name="nombre" value="" size="10" onkeyUp="buscar_personas()">
					</th>
					<th>
						<b>C.I</b><br> 
						<input type="text" name="ci" value="" size="10" onkeyUp="buscar_personas()">
					</th>
				</tr>				
			</table>
		</form>
	</center>


	<center>
		<div id="personas1">
		<table class="listado">
			<tr>
				<th>NRO</th><th>CI</th><th>NOMBRES</th><th>APELLIDO PATERNO</th><th>APELLIDO MATERNO</th>
				<th><img src="../../imagenes/modificar.png" ></th><th><img src="../../imagenes/borrar1.jpg" ></th>
			</tr>
			<?php $_smarty_tpl->_assignInScope('b', "0");?>
			<?php $_smarty_tpl->_assignInScope('total', ((string)($_smarty_tpl->tpl_vars['pagina']->value-1)));?>
			<?php $_smarty_tpl->_assignInScope('a', ((string)($_smarty_tpl->tpl_vars['numreg']->value*$_smarty_tpl->tpl_vars['total']->value)));?>
			<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1+$_smarty_tpl->tpl_vars['a']->value)));?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personas']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['ci'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
</td>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['r']->value['apellido_paterno'];?>
</td>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['r']->value['apellido_materno'];?>
</td>
				<td align="center">
					<form name="formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['persona_pk'];?>
" method="post" action="persona_modificar.php">
						<input type="hidden" name="persona_pk" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['persona_pk'];?>
">
						<a href="javascript:document.formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['persona_pk'];?>
.submit();" title="modificar persona sistema">
							modificar
						</a>
					</form>
				</td>
				<td align="center">
					<form name="formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['persona_pk'];?>
" method="post" action="persona_eliminar.php">
						<input type="hidden" name="persona_pk" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['persona_pk'];?>
">
						<a href="javascript:document.formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['persona_pk'];?>
.submit();" title="eliminar persona sistema" onclick="javascript:return(confirm('desea realmente eliminar a la persona..?')); location.href='persona_eliminar.php'">
							eliminar
						</a>
					</form>
				</td>
				<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tr>
		</table>

		<table >
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
