<?php
/* Smarty version 3.1.36, created on 2022-06-26 01:39:51
  from 'C:\wamp64\www\sis_cuentas_domicilio\privada\propietario\templates\propietario_nuevo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62b7b8e70f9436_28467300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37f3ad48fb66b334577d58fca78cb9df6c3fd811' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_cuentas_domicilio\\privada\\propietario\\templates\\propietario_nuevo.tpl',
      1 => 1656207586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b7b8e70f9436_28467300 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../../css/colores.css">
    <meta charset="UTF-8">
    <?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/datos_propietario.js"><?php echo '</script'; ?>
>
      <link rel="stylesheet" type="text/css" href="../calendario/tcal.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="../calendario/tcal.js"><?php echo '</script'; ?>
>
</head>
<body>
    <div class="estil">
    <form action="propietario_nuevo1.php" method="post" name="datos_propietario" class="estiloin">
   
            <p><h1>REGISTRAR PERSONA</h1></p>   
            <p>NOMBRES<input type="text" name="nombres" placeholder="nombres" size="15" class="otro"onkeyup="this.value=this.value.toUpperCase()" >(*)</p>          
            <p>APELLIDO PATERNO<input type="text"size="15" name="apellido_paterno"  class="otro" onkeyup="this.value=this.value.toUpperCase()">(*)</p>              
            <p>APELLIDO MATERNO<input type="text"size="15" name="apellido_materno"  class="otro" onkeyup="this.value=this.value.toUpperCase()">(*)</p> 
            <p>
               <input type="text" name="date" placeholder="fecha de  nacimiento"class="tcal">
            </p>             
            <p>NUMERO DE CELULAR<input type="text" size="15"name="numero_de_celular"  class="otro" onkeyup="this.value=this.value.toUpperCase()">(*)</p>            
     
            <p>
                <input type="hidden" name="accion" value="">
                 <input type="button" name="aceptar"  onclick="validar();" class="bt" value="aceptar">
                  <input type="button" name="cancelar" onclick="javascript:location.href='propietario.php';" class="tb" value="CANCELAR">
            </p>


            <p>
                <b>(*)Campos Obligatorios</b>
            </p>
                                   
         

    </form>
    </div>
</body>
</html><?php }
}
