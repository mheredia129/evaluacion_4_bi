<?php
/* Smarty version 3.1.36, created on 2022-06-03 03:09:55
  from 'C:\wamp\www\sis_cuentas_domicilio\privada\tipo_inmueble\templates\tipo_inmueble_modificar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62995f634f90c5_21271384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e74555292cf55ec441e8d85594fd26eba5325d2c' => 
    array (
      0 => 'C:\\wamp\\www\\sis_cuentas_domicilio\\privada\\tipo_inmueble\\templates\\tipo_inmueble_modificar.tpl',
      1 => 1654218576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62995f634f90c5_21271384 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" type="text/css" href="../../css/colores.css">
    <meta charset="UTF-8">
    <?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/tipo_inmueble_nuevo.js"><?php echo '</script'; ?>
>
</head>
<body>



    <div class="estil">    
       
    <form action="tipo_inmueble_modificar1.php" method="post" class="estiloin" name="tipo_inmueble_nuevo">
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipo_inmueble']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
        <table>

                <p><h1>MODIFICAR  TIPOS DE INMUEBLES</h1></p>  
               

                <p>DETALLES DEL INMUEBLE<br><input type="text" name="detalle_inmueble" 
                    value="<?php echo $_smarty_tpl->tpl_vars['r']->value['detalle_inmueble'];?>
" class="otro" onkeyup="this.value=this.value.toUpperCase()"></p>  

                 <input type="hidden" name="accion" value="">
                <input type="hidden" name="tipo_inmueble_pk" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['tipo_inmueble_pk'];?>
">
                <input type="button" value="Actualizar" onclick="validar();" class="bt">
                <input type="button" value="Cancelar"onclick="javascript:location.href='tipo_inmueble.php';" class="tb">
                
        

            </table>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </form>
     
    </div>
     
    
</body>
</html><?php }
}
