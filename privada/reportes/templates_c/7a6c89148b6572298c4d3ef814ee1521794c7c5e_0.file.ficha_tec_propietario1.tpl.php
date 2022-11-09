<?php
/* Smarty version 3.1.36, created on 2022-09-07 14:54:18
  from 'C:\wamp64\www\Nueva\sis_cuentas_domicilio\privada\reportes\templates\ficha_tec_propietario1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6318b09a98db41_10832934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a6c89148b6572298c4d3ef814ee1521794c7c5e' => 
    array (
      0 => 'C:\\wamp64\\www\\Nueva\\sis_cuentas_domicilio\\privada\\reportes\\templates\\ficha_tec_propietario1.tpl',
      1 => 1662513015,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6318b09a98db41_10832934 (Smarty_Internal_Template $_smarty_tpl) {
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
    <table width="100%" border="0">
        <tr>
            <td><img src="../../imagenes/<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="70%" >
            </td>
            <td align="center" width="80%">
            <h1>FICHA TECNICA DE PROPIETARIO</h1>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['propietario']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
            <tr>    
                <th align="right"> nombres</th><th>:</th>
                <td><input type="text" name="nombres" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
" disabled=""></td>
                 </tr>
                 <th align="right"> apellido paterno</th><th>:</th>
                <td><input type="text" name="nombres" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['apellido_paterno'];?>
" disabled=""></td>
                 </tr>
                  <th align="right"> apellido materno</th><th>:</th>
                <td><input type="text" name="nombres" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['apellido_materno'];?>
" disabled=""></td>
                 </tr>
                  <th align="right"> telefono</th><th>:</th>
                <td><input type="text" name="nombres" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['numero_celular'];?>
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
