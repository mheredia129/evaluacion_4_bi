<?php
/* Smarty version 3.1.36, created on 2022-08-24 02:19:58
  from 'C:\xampp\htdocs\sis_cuentas_domicilio\privada\reportes\templates\tipos_gastos_fechas1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_63056eae924445_89678503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '800c0fdc4e1e26f6a8f6aba4df2caaecb423f7f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sis_cuentas_domicilio\\privada\\reportes\\templates\\tipos_gastos_fechas1.tpl',
      1 => 1657228120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63056eae924445_89678503 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
"type="text/css">
    <?php echo '<script'; ?>
 type="text/javascript">
        var ventanaCalendario=false
        function imprimir(){
            if (confirm('Desea Imprimir ?')){
                window.print();
            }
        }
    <?php echo '</script'; ?>
>
</head>
<body style='cursor:pointer;cursor:hand' onclick="imprimir();">
    <table width="100%" border="0">
        <tr>
            <td><img src="../../imagenes/<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="70%" >
            </td>
            <td align="center" width="80%">
            <h1>TIPOS DE GASTOS CON FECHAS</h1>
        </td>
        </tr>
    </table>
    <br>
    <center>
        <table border="1" cellspacing="0">
            <tr>
                <th>NRO</th><th>tipo de gasto</th><th>FECHA INSERCION</th>
            </tr>
            <?php $_smarty_tpl->_assignInScope('b', "1");?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipos_gastos_fechas1']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
            <tr>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['tipo_gasto'];?>
 </td>
                <td><i><?php echo $_smarty_tpl->tpl_vars['r']->value['fec_insercion'];?>
</i>></td>
                <?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tr>
        </table>
        <br><br>
    </center>
    <b>DEL:</b><?php echo $_smarty_tpl->tpl_vars['fechas1']->value;?>
 <b>A</b><?php echo $_smarty_tpl->tpl_vars['fechas2']->value;?>

</body>
</html>
<?php }
}
