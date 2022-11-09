<?php
/* Smarty version 3.1.36, created on 2022-09-08 16:38:53
  from 'C:\wamp64\www\Nueva\sis_cuentas_domicilio\privada\reportes\templates\rtp_personas_genero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_631a1a9d670331_81759732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65b3f83b1ec75310db153c9ce731bd0b4225ff1e' => 
    array (
      0 => 'C:\\wamp64\\www\\Nueva\\sis_cuentas_domicilio\\privada\\reportes\\templates\\rtp_personas_genero.tpl',
      1 => 1661907830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_631a1a9d670331_81759732 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
"type="text/css">
	<meta charset="	UTF-8">
	
<?php echo '<script'; ?>
 type="text/javascript">
function validar(){
	genero = document.formu.genero.value;
   if (document.formu.genero.value =="") {
    alert("por favor selecione el genero");
    document.formu.genero.focus();
    return;
}
ventanaCalendario = window.open("rtp_personas_genero1.php?genero=" +genero, "calendario", "width=600, heigth=550,left=100,top=100, scrollbars=yes, menubars=no, statusbas=NO, status=NO, resizable=YES, location=NO")
}
<?php echo '</script'; ?>
>

</head>
<body>
	<div class="estil">
		<br>
		<h1>RTP DE PERSONAS POR GENERO</h1>
		<form method="post" name="formu">
       <p>
       	<b>*selecione genero</b>
       	<select name="genero">
       	<option value="">--selecione--</option>
       	<option value="T">TODOS</option>
       	<option value="F">FEMENINO</option>
       	<option value="M">MASCULINO</option>
       	</select>
       </p>
        
          <p>
         
      <input type="hidden" name="accion" value="">
			<input type="button" value="Aceptar" onclick="validar();" class="boton2">
          
          </p>
 
		</form>
	</div>
</body>
</html><?php }
}
