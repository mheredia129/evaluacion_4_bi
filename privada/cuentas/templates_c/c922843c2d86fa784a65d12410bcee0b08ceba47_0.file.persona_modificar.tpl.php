<?php
/* Smarty version 3.1.36, created on 2022-08-12 03:15:02
  from 'C:\xampp\htdocs\sis_cuentas_domicilio\privada\personas\templates\persona_modificar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62f5a99632fcf6_28141495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c922843c2d86fa784a65d12410bcee0b08ceba47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sis_cuentas_domicilio\\privada\\personas\\templates\\persona_modificar.tpl',
      1 => 1654182090,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62f5a99632fcf6_28141495 (Smarty_Internal_Template $_smarty_tpl) {
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
 type="text/javascript" src="js/persona_nuevo.js"><?php echo '</script'; ?>
>
</head>
<body>



    <div class="estil">    
       
    <form action="persona_modificar1.php" method="post" class="estiloin" name="persona_nuevo">
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['persona']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
        <table>

                <p><h1>INGRESAR DATOS</h1></p>  
               

                <p>CI<br><input type="text" name="ci" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['ci'];?>
" class="otro"> </p>  

                <p>NOMBRES<input type="text" name="nombres" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
" class="otro" onkeyup="this.value=this.value.toUpperCase()"></p>

                <p>APELLIDO PATERNO<input type="text" name="apellido_paterno" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['apellido_paterno'];?>
" class="otro" onkeyup="this.value=this.value.toUpperCase()"></p>              
                <p>APELLIDO MATERNO<input type="text" name="apellido_materno" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['apellido_materno'];?>
" class="otro" onkeyup="this.value=this.value.toUpperCase()"></p>              
                <p>NUMERO DE CELULAR<input type="text" name="numero_de_celular" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['numero_de_celular'];?>
" class="otro"></p>            
   
                 




                 <input type="hidden" name="accion" value="">
                <input type="hidden" name="persona_pk" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['persona_pk'];?>
">
                <input type="button" value="Actualizar" onclick="validar();" class="bt">
                <input type="button" value="Cancelar"onclick="javascript:location.href='personas.php';" class="tb">
                
        

            </table>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </form>
     
    </div>
     
    
</body>
</html><?php }
}
