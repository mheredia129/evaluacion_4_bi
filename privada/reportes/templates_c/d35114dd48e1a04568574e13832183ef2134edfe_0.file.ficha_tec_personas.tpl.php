<?php
/* Smarty version 3.1.36, created on 2022-09-08 17:06:02
  from 'C:\wamp64\www\sis_cuentas_domicilio\privada\reportes\templates\ficha_tec_personas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_631a20faa25f11_43386150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd35114dd48e1a04568574e13832183ef2134edfe' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_cuentas_domicilio\\privada\\reportes\\templates\\ficha_tec_personas.tpl',
      1 => 1662511683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_631a20faa25f11_43386150 (Smarty_Internal_Template $_smarty_tpl) {
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
			contenedor = document.getElementById('personas1');

			d1 = document.formu.paterno.value;
			d2 = document.formu.materno.value;
			d3 = document.formu.nombres.value;
			d4 = document.formu.ci.value;
			ajax = nuevoAjax();
			url = "ajax_buscar_persona.php"
			param = "paterno="+d1+"&materno="+d2+"&nombres="+d3+"&ci="+d4;
			ajax.open("POST",url,true);
			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			ajax.onreadystatechange = function(){
				if (ajax.readyState == 4){
					contenedor.innerHTML = ajax.responseText;

				}
			}
			ajax.send(param);
		}

function mostrar(persona_pk){
	var d1 ,ventanaCalendario;
	d1 = persona_pk;
ventanaCalendario = window.open("ficha_tec_personas1.php?persona_pk="+d1, "calendario", "width=600, heigth=550,left=100,top=100, scrollbars=yes, menubars=no, statusbas=NO, status=NO, resizable=YES, location=NO")
}
<?php echo '</script'; ?>
>

</head>
<body>
	<center>
		<br>
		<h1>FICHA TECNICA PERSONAS</h1>
		<form method="post" name="formu">
        <table border="1">
        <tr>
        <th>paterno</th><th>:</th>
        <td><input type="text" name="paterno"  value=""  size="10" onkeyup="buscar()"></td>
         <th>materno</th><th>:</th>
        <td><input type="text" name="materno"  value=""  size="10" onkeyup="buscar()"></td>
          <th>nombres</th><th>:</th>
        <td><input type="text" name="nombres"  value=""  size="10" onkeyup="buscar()"></td>
             <th>C.I</th><th>:</th>
        <td><input type="text" name="ci"  value=""  size="10" onkeyup="buscar()"></td>

        </tr>

      </table>
		</form>
	</center>
	<center>
		<div id="personas1">
		</div>
	</center>
</body>
</html><?php }
}
