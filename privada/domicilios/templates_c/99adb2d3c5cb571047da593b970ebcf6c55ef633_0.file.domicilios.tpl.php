<?php
/* Smarty version 3.1.36, created on 2022-09-02 03:55:36
  from 'C:\xampp\htdocs\sis_cuentas_domicilio\privada\domicilios\templates\domicilios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_631162985c21e2_61294612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99adb2d3c5cb571047da593b970ebcf6c55ef633' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sis_cuentas_domicilio\\privada\\domicilios\\templates\\domicilios.tpl',
      1 => 1652425916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_631162985c21e2_61294612 (Smarty_Internal_Template $_smarty_tpl) {
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
				<h1>DOMICILIO</h1>
			</td>
			<td align="right" width="33%">
				<form name="formuNuevo" method="post" action="domicilio_nuevo.php">
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
				<th>NRO</th><th>TIPO DE INMUEBLE</th><th>PROPIETARIO</th><th>NRO CASA</th><th>TIPO DE GASTO</th><th>DESCRIPCION</th>
				<th><img src="../../imagenes/modificar.png" ></th><th><img src="../../imagenes/borrar1.jpg" ></th>
			</tr>

			<?php $_smarty_tpl->_assignInScope('b', '1');?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domicilios']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>

			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>

			    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['detalle_inmueble'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value['apellido_paterno'];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value['apellido_materno'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['numero_casa'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['direccion'];?>
 </td> 
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['descripcion_domicilio'];?>
</td>
			
				<td align="center">
					<form name="formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['domicilio_pk'];?>
" method="post" action="domicilio_modificar.php">
						<input type="hidden" name="domicilio_pk" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['domicilio_pk'];?>
">
						<input type="hidden" name="tipo_inmueble_pk" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['tipo_inmueble_pk'];?>
">
						<input type="hidden" name="propietario_pk" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['propietario_pk'];?>
">
					
						<a href="javascript:document.formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['domicilio_pk'];?>
.submit();" title="modificar domicilio">
							modificar>>>>>
						</a>						
					</form>					
				</td>
				<td align="center">
					<form name="formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['domicilio_pk'];?>
" method="post" action="domicilio_eliminar.php">
						<a href="javascript:document.formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['domicilio_pk'];?>
.submit();" title="eliminar domicilio"
						onclick='javascript:return(confirm("desea realmente eliminar al domicilios:::<?php echo $_smarty_tpl->tpl_vars['r']->value['domicilio_pk'];?>
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
