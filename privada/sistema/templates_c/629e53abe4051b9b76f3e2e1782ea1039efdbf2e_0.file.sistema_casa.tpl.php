<?php
/* Smarty version 3.1.36, created on 2022-08-11 01:54:06
  from 'C:\xampp\htdocs\sis_cuentas_domicilio\privada\sistema\templates\sistema_casa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62f4451ef0b568_08532177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '629e53abe4051b9b76f3e2e1782ea1039efdbf2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sis_cuentas_domicilio\\privada\\sistema\\templates\\sistema_casa.tpl',
      1 => 1659680962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62f4451ef0b568_08532177 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" type="text/css" href="../../css/colores.css">
    <meta charset="UTF-8">
    <?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/sistema_casa.js"><?php echo '</script'; ?>
>

</head>
<body>

<center>
    <h1>SISTEMA DE CUENTAS DE TU CASA</h1>

     
       
    <form action="sistema_casa1.php" method="post" class="estiloin" name="formu" enctype="multipart/form-data">

         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sistema_casa']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
        <table border="1">

                <p><h1>INGRESAR DATOS</h1></p>  
       
                <p>NOMBRE<input type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
" class="otro" onkeyup="this.value=this.value.toUpperCase()"></p>

                <p>URL<input type="text" name="url" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['url'];?>
" class="otro" onkeyup="this.value=this.value.toUpperCase()"></p>              
                <p>LOGO(*)           
   
               <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
               <input type="file" name="logo">
               <input type="hidden" name="logo1" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['logo'];?>
">
               <br><b><?php echo $_smarty_tpl->tpl_vars['r']->value['logo'];?>
</b>
           
                
                  
                         <input type="hidden" name="accion" value="">
                          <input type="hidden" name="sistema_pk" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['sistema_pk'];?>
">
                           <input type="button" value="Aceptar"  class="bt" onclick="validar();">
       
          
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </table>
            <table>
                <tr>
                    <td colspan="3" align="center"><b>(*) campos obligatorios</b> </td>
                </tr>
            </table>
          
    </form>
     

     
    </center>

</body>
</html><?php }
}
