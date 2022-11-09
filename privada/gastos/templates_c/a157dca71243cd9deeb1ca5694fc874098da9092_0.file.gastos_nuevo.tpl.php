<?php
/* Smarty version 3.1.36, created on 2022-07-07 17:49:29
  from 'C:\wamp64\www\sis_cuentas_domicilio\privada\gastos\templates\gastos_nuevo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62c754e93468e4_49075975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a157dca71243cd9deeb1ca5694fc874098da9092' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_cuentas_domicilio\\privada\\gastos\\templates\\gastos_nuevo.tpl',
      1 => 1657230507,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c754e93468e4_49075975 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../../css/colores.css">
    <meta charset="UTF-8">
    <?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/gastos.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" type="text/css" href="../calendario/tcal.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="../calendario/tcal.js"><?php echo '</script'; ?>
>
</head>
<body>
    <div class="estil">
    <form action="gastos_nuevo1.php" method="post" name="gastos" class="estiloin">
   
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
                     
            <p>MONTO<input type="text" size="15"name="monto"  class="otro" >(*)</p> 

            <p>DESCRIPCION<br><textarea name="descripcion" cols="40" rows="5" ></textarea>(*)</p>
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
