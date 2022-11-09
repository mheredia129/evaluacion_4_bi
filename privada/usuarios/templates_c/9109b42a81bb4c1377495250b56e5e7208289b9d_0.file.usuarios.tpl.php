<?php
/* Smarty version 3.1.36, created on 2022-06-06 20:17:00
  from 'C:\wamp64\www\sis_cuentas_domicilio\privada\usuarios\templates\usuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_629e60bc64d814_45415460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9109b42a81bb4c1377495250b56e5e7208289b9d' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_cuentas_domicilio\\privada\\usuarios\\templates\\usuarios.tpl',
      1 => 1654546594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629e60bc64d814_45415460 (Smarty_Internal_Template $_smarty_tpl) {
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
				<h1>USUARIOS</h1>
			</td>
			<td align="right" width="33%">
				<form name="formuNuevo" method="post" action="usuario_nuevo.php">
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
				<th>NRO</th><th>USUARIO</th><th>PERSONA</th>
				<th><img src="../../imagenes/modificar.png" ></th><th><img src="../../imagenes/borrar1.jpg" ></th>
			</tr>

			<?php $_smarty_tpl->_assignInScope('b', '1');?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>

			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['usuario1'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['apellido_paterno'];?>
  <?php echo $_smarty_tpl->tpl_vars['r']->value['apellido_materno'];?>
  <?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
</td>
				<td align="center">
					<form name="formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['usuario_pk'];?>
" method="post" action="usuario_modificar.php">
						<input type="hidden" name="usuario_pk" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['usuario_pk'];?>
">
						<input type="hidden" name="persona_pk" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['persona_pk'];?>
">
						<a href="javascript:document.formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['usuario_pk'];?>
.submit();" title="modificar usuario">
							modificar>>>>>
						</a>						
					</form>					
				</td>
				<td align="center">
					<form name="formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['usuario_pk'];?>
" method="post" action="usuario_eliminar.php">
						<input type="hidden" name="usuario_pk" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['usuario_pk'];?>
">
						<a href="javascript:document.formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['usuario_pk'];?>
.submit();" title="eliminar usuario"
						onclick='javascript:return(confirm("desea realmente eliminar al usuario:::<?php echo $_smarty_tpl->tpl_vars['r']->value['usuario_pk'];?>
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
