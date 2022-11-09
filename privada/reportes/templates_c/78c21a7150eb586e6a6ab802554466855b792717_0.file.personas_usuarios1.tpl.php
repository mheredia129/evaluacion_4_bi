<?php
/* Smarty version 3.1.36, created on 2022-07-01 03:56:53
  from 'C:\wamp64\www\sis_cuentas_domicilio\privada\reportes\templates\personas_usuarios1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62be708574b1d8_97286579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78c21a7150eb586e6a6ab802554466855b792717' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_cuentas_domicilio\\privada\\reportes\\templates\\personas_usuarios1.tpl',
      1 => 1656647803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62be708574b1d8_97286579 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
<?php echo '<script'; ?>
 type="text/javascript">
              var ventanaCalendario = false
              function imprimir() {
                   if(confirm(' Desea Imprimir ?')){
               window.print();
            } 
 }
 
<?php echo '</script'; ?>
>
</head>
<body style='cursor:pointer;cursor:hand' onclick='imprimir();'>

<table width="100%" border="0">
 <tr>
        <td><img src="../../imagenes/<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="70%" alt=""></td>
        <td aling="center"  width="80%"  ><h1>PERSONAS USUARIOS</h1> </td>
 </tr>
</table>
 <br>
 <center>
  <table border="1" cellpadding="0">
   <tr>
   <th>NRO</th><th>PERSONA</th><th>USUARIO</th>
   </tr>
   <?php $_smarty_tpl->_assignInScope('b', '1');?>
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personas_usuarios']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
   <tr>
    <td aling="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];
echo $_smarty_tpl->tpl_vars['r']->value['apellido_paterno'];
echo $_smarty_tpl->tpl_vars['r']->value['apellido_materno'];?>
</td>
    <td><i><?php echo $_smarty_tpl->tpl_vars['r']->value['usuario1'];?>
</i></td>
    <?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   </tr>
  </table>
  <br>
  <br>
  <b>Fecha:</b><?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>

 </center>
</body>
</html><?php }
}
