<?php
/* Smarty version 3.1.36, created on 2022-09-09 04:45:01
  from 'C:\wamp64\www\sis_cuentas_domicilio\privada\cuentas\templates\personas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_631ac4cdb9c8e7_13263568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea4ad74baa778c08a880d77df2d99e7495fe232f' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_cuentas_domicilio\\privada\\cuentas\\templates\\personas.tpl',
      1 => 1662698697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_631ac4cdb9c8e7_13263568 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
function buscar_personas(){
var d1,d2,d3,ajax,url,param,contenedor;
contenedor = document.getElementById('personas1');
d1 =document.formu.cliente.value;
d2 =document.formu.nro_cuenta.value;
d3 =document.formu.monto_cuenta.value;

ajax = nuevoAjax();
url = "ajax_buscar_cuentas.php"
param = "cliente="+d1+"&nro_cuenta="+d2+"&monto_cuenta="+d3;
ajax.open("POST", url, true);
ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
ajax.onreadystatechange = function(){
	if (ajax.readyState == 4){
		contenedor.innerHTML = ajax.responseText;
	}
}
ajax.send(param);
}
<?php echo '</script'; ?>
>
</head>
<body>
	<div class="titulo_listado">
		<h1>
			CUENTAS
		</h1>
		
	</div>

	<center>		
		<form action="#" method="post" name="formu">
		
		
		 
		<table border="1" class="listado">
			<tr>
				 <th>
			<b>*selecione al cliente</b><br>
       	    <select name="cliente" onchange="buscar_personas()">
       	    <option value="">--selecione--</option>   
       
       	       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personas']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</option>     
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            
       	     </select>
          </th>
			
					<th>
						<b>nro_cuenta</b><br>
						<input type="text" name="nro_cuenta" value="" size="10" onkeyUp="buscar_personas()">
					</th>
					<th>
						<b>monto_cuenta</b><br> 
						<input type="text" name="monto_cuenta" value="" size="10" onkeyUp="buscar_personas()">
					</th>
						
			</tr>															
		</table>

			
		</form>
	</center>

	<center>
		<div id="personas1">
		<table class="listado">
			<tr>
			
				<th>NRO</th><th>CLIENTE</th><th>N?? DE CUENTA</th><th>FECHA DE APERTURA</th><th>MONTO DE CUENTA</th>
				
			</tr>
			<?php $_smarty_tpl->_assignInScope('b', "1");?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personas']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
		
			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
-<?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];?>
-<?php echo $_smarty_tpl->tpl_vars['r']->value['am'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nro_cuenta'];?>
</td>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['r']->value['fecha_apertura'];?>
</td>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['r']->value['monto_cuenta'];?>
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
