<?php
/* Smarty version 3.1.36, created on 2022-09-02 03:57:05
  from 'C:\xampp\htdocs\sis_cuentas_domicilio\privada\ingresos_economicos\templates\ingreso_economico_nuevo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_631162f1577711_02410564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7374c296658ab051fcc4d49fd92637becc0067cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sis_cuentas_domicilio\\privada\\ingresos_economicos\\templates\\ingreso_economico_nuevo.tpl',
      1 => 1654386376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_631162f1577711_02410564 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../../css/colores.css">
    <meta charset="UTF-8">
    <?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/usuario_nuevo.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" type="text/css" href="../calendario/tcal.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="../calendario/tcal.js"><?php echo '</script'; ?>
>
</head>
<body>
    <div class="estil">
    <form action="ingreso_economico_nuevo1.php" method="post" name="ingreso_economico_nuevo" class="estiloin">
   
            <p><h1>REGISTRAR NUEVO INGRESO </h1></p> 
            <b>nro de casa (*)</b>
            <select name="domicilio_pk">
                <option value=""> selecione</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domicilios']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['domicilio_pk'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['numero_casa'];?>
--<?php echo $_smarty_tpl->tpl_vars['r']->value['direccion'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domicilio']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['domicilio_pk'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['numero_casa'];?>
-<?php echo $_smarty_tpl->tpl_vars['r']->value['direccion'];?>
-
                        </option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select><br>


            <b>efectivo disponible (*)</b>
            <select name="efectivo_disponible_pk">
                <option value=""> selecione</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['efectivo_disponible']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['efectivo_disponible_pk'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['monto_dis'];?>
</option>
                   
            </select>
                     
            <p>MONTO<input type="text" size="15"name="monto_in"  class="otro" >(*)</p> 

            <p>DESCRIPCION<br><textarea name="desc_in" cols="40" rows="5" ></textarea>(*)</p>
            <p> 
                <p>
                    <input type="text" name="date" placeholder="fecha del ingreso del monto"class="tcal">
                </p>


        
                <input type="hidden" name="accion" value="">
                 <input type="button" name="aceptar"  onclick="validar();" class="bt" value="aceptar">
                  <input type="button" name="cancelar" onclick="javascript:location.href='ingresos_economicos.php';" class="tb" value="CANCELAR">
            </p>
             <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <p>
                <b>(*)Campos Obligatorios</b>
            </p>
                                   
         

    </form>
    </div>
</body>
</html><?php }
}
