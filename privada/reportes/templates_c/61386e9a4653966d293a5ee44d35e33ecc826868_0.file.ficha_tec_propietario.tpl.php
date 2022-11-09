<?php
/* Smarty version 3.1.36, created on 2022-09-08 17:06:13
  from 'C:\wamp64\www\sis_cuentas_domicilio\privada\reportes\templates\ficha_tec_propietario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_631a210563ced5_88357124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61386e9a4653966d293a5ee44d35e33ecc826868' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_cuentas_domicilio\\privada\\reportes\\templates\\ficha_tec_propietario.tpl',
      1 => 1662512976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_631a210563ced5_88357124 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
"type="text/css">
	 <?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
	<meta charset="	UTF-8">

<?php echo '<script'; ?>
 type="text/javascript">
function buscar(){
			
			var d1,d2,d3,d4, ajax,url,param,contenedor;
			contenedor = document.getElementById('propietario1');

			d1 = document.formu.paterno.value;
			d2 = document.formu.materno.value;
			d3 = document.formu.nombres.value;
			d4 = document.formu.numero_celular.value;
			ajax = nuevoAjax();
			url = "ajax_buscar_propietario.php"
			param = "paterno="+d1+"&materno="+d2+"&nombres="+d3+"&numero_celular="+d4;
			ajax.open("POST",url,true);
			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			ajax.onreadystatechange = function(){
				if (ajax.readyState == 4){
					contenedor.innerHTML = ajax.responseText;

				}
			}
			ajax.send(param);
		}

function mostrar(propietario_pk){
	var d1 ,ventanaCalendario;
	d1 = propietario_pk;
ventanaCalendario = window.open("ficha_tec_propietario1.php?propietario_pk="+d1, "calendario", "width=600, heigth=550,left=100,top=100, scrollbars=yes, menubars=no, statusbas=NO, status=NO, resizable=YES, location=NO")
}
<?php echo '</script'; ?>
>

</head>
<body>
	<center>
		<br>
		<h1>FICHA TECNICA PROPIETARIO</h1>
		<form method="post" name="formu">
        <table border="1">
        <tr>
        <th>paterno</th><th>:</th>
        <td><input type="text" name="paterno"  value=""  size="10" onkeyup="buscar()"></td>
         <th>materno</th><th>:</th>
        <td><input type="text" name="materno"  value=""  size="10" onkeyup="buscar()"></td>
          <th>nombres</th><th>:</th>
        <td><input type="text" name="nombres"  value=""  size="10" onkeyup="buscar()"></td>
             <th>numero de celular</th><th>:</th>
        <td><input type="text" name="numero_celular"  value=""  size="10" onkeyup="buscar()"></td>

        </tr>

      </table>
		</form>
	</center>
	<center>
		<div id="propietario1">
		</div>
	</center>
</body>
</html><?php }
}
