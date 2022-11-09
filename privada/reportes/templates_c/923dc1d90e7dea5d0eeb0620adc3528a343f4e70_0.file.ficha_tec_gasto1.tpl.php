<?php
/* Smarty version 3.1.36, created on 2022-09-07 15:31:09
  from 'C:\wamp64\www\Nueva\sis_cuentas_domicilio\privada\reportes\templates\ficha_tec_gasto1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6318b93dd9faa2_02836703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '923dc1d90e7dea5d0eeb0620adc3528a343f4e70' => 
    array (
      0 => 'C:\\wamp64\\www\\Nueva\\sis_cuentas_domicilio\\privada\\reportes\\templates\\ficha_tec_gasto1.tpl',
      1 => 1662564082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6318b93dd9faa2_02836703 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>

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
    <table width="100%" border="0" >
        <tr>
            <td><img src="../../imagenes/<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="70%" >
            </td>
            <td align="left " width="80%">

            <h1>FICHA TECNICA DE GASTOS</h1>

        </td>
        </tr>
    </table>
    <br>
    <center>
        <table border="1" cellspacing="0">
    
          <tr>
            <td>
                <table border="0">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gastos']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
              <tr>  
                  <th align="right"> tipo de gasto</th><th>:</th>
                <td><input type="text" name="nombres" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['tipo_gasto'];?>
" disabled=""></td>
                 </tr>
            <tr>    
                <th align="right"> descripcion</th><th>:</th>
                <td><input type="text" name="nombres" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['descripcion'];?>
" disabled=""></td>
                 </tr>
  <tr>  
                 <th align="right"> fecha del gasto</th><th>:</th>
                <td><input type="text" name="nombres" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['fecha_gasto'];?>
" disabled=""></td>
                 </tr>
  <tr>  
                  <th align="right"> monto </th><th>:</th>
                <td><input type="text" name="nombres" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['monto'];?>
" disabled=""></td>
                 </tr><th align="right"> monto disponible </th><th>:</th>
                <td><input type="text" name="nombres" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['monto_dis'];?>
" disabled=""></td>
                 </tr>


                          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
           
        </table>
      </td>
  </tr>
</table>
    </center>
    
</body>
</html>
<?php }
}
