<?php
/* Smarty version 3.1.36, created on 2022-07-07 16:33:44
  from 'C:\wamp64\www\sis_cuentas_domicilio\privada\tipos_gastos\templates\tipos_gastos_modificar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62c74328081975_88778292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24691d8fe55c57456ce9b0f01f25b158088b3acd' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_cuentas_domicilio\\privada\\tipos_gastos\\templates\\tipos_gastos_modificar.tpl',
      1 => 1657225864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c74328081975_88778292 (Smarty_Internal_Template $_smarty_tpl) {
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
 type="text/javascript" src="js/tipo_de_gastos.js"><?php echo '</script'; ?>
>
</head>
<body>



    <div class="estil">    
       
    <form action="tipos_gastos_modificar1.php" method="post" class="estiloin" name="tipo_gasto">
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipos_gastos']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
        <table>

                <p><h1>INGRESAR DATOS</h1></p>  
               

            

                <p>TIPO DE GASTO<input type="text" name="tipo_gasto" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['tipo_gasto'];?>
" class="otro" onkeyup="this.value=this.value.toUpperCase()"></p>

                           
   
                 




                 <input type="hidden" name="accion" value="">
                <input type="hidden" name="tipo_gasto_pk" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['tipo_gasto_pk'];?>
">
                <input type="button" value="Actualizar" onclick="validar();" class="bt">
                <input type="button" value="Cancelar"onclick="javascript:location.href='tipos_gastos.php';" class="tb">
                
        

            </table>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </form>
     
    </div>
     
    
</body>
</html><?php }
}
