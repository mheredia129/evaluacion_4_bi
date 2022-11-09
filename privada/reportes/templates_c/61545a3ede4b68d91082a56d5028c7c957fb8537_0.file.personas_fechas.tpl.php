<?php
/* Smarty version 3.1.36, created on 2022-08-24 01:45:00
  from 'C:\xampp\htdocs\sis_cuentas_domicilio\privada\reportes\templates\personas_fechas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6305667c314981_59451719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61545a3ede4b68d91082a56d5028c7c957fb8537' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sis_cuentas_domicilio\\privada\\reportes\\templates\\personas_fechas.tpl',
      1 => 1656646312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6305667c314981_59451719 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
"type="text/css">
    <link rel="stylesheet" type="text/css" href="../calendario/tcal.css">
	<?php echo '<script'; ?>
 type="text/javascript" src="../calendario/tcal.js"><?php echo '</script'; ?>
>
	<meta charset="	UTF-8">
	
<?php echo '<script'; ?>
 type="text/javascript">
function validar(){
	fecha1 = document.formu.date1.value;
	fecha2 = document.formu.date2.value;
   if ((document.formu.date1.value =="") || (document.formu.date2.value =="") || (document.formu.date1.value > document.formu.date2.value)){
    alert("las fechas son incorrectas");
    document.formu.date1.focus();
    return;
}
ventanaCalendario = window.open("personas_fechas1.php?fecha1=" + fecha1 + "&fecha2=" +fecha2 , "calendario", "width=600, heigth=550,left=100,top=100, scrollbars=yes, menubars=no, statusbas=NO, status=NO, resizable=YES, location=NO")
}
<?php echo '</script'; ?>
>

</head>
<body>
	<center>
		<br>
		<h1>REPORTES DE PERSONAS CON FECHAS DE INSERCION </h1>
		<form method="post" name="formu">
        <table border="1">
        <tr>
        <th>*Fecha Inicio</th><th>:</th>
        <td><input type="text" name="date1" class="tcal" value="" / size="10"></td>
         <th>*Fecha Fin</th><th>:</th>
        <td><input type="text" name="date2" class="tcal" value="" / size="10"></td>
        </tr>
          <tr>
          	<td align="center" colspan="6">
          	<input type="hidden" name="accion" value="">
			<input type="button" value="Aceptar" onclick="validar();" class="boton2">
          	</td>
          </tr>
      </table>
		</form>
	</center>
</body>
</html><?php }
}
