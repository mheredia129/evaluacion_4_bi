<?php
/* Smarty version 3.1.36, created on 2022-09-07 02:48:57
  from 'C:\xampp\htdocs\sis_cuentas_domicilio\privada\reportes\templates\ficha_tec_personas1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6317ea79b7d840_88430225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '654c97c60da98d531c87e43912d50f1b4ed7ae8b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sis_cuentas_domicilio\\privada\\reportes\\templates\\ficha_tec_personas1.tpl',
      1 => 1662511682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6317ea79b7d840_88430225 (Smarty_Internal_Template $_smarty_tpl) {
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
            <h1>FICHA TECNICA DE PERSONAS</h1>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['persona']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
            <tr>
                <th align="right"> CI</th><th>:</th>
                <td><input type="text" name="ci" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['ci'];?>
" disabled=""></td>
                 </tr>
                <th align="right"> nombres</th><th>:</th>
                <td><input type="text" name="nombres" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
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
                <td><input type="text" name="nombres" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['numero_de_celular'];?>
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
