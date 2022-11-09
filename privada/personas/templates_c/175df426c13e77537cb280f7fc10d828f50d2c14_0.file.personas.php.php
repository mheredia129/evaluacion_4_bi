<?php
/* Smarty version 3.1.36, created on 2022-05-04 06:39:17
  from 'C:\wamp64\www\sis_cuentas_domicilio\privada\personas\personas.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62721f9529ed01_56767737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '175df426c13e77537cb280f7fc10d828f50d2c14' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_cuentas_domicilio\\privada\\personas\\personas.php',
      1 => 1649565574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62721f9529ed01_56767737 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../paginacion.inc.php");
//$direc_css ="../css/colores.css";
$smarty= new  Smarty;
//$db->debug=true;
contarRegistros($db,"persona");
paginacion("personas.php?",$smarty);


$sql3 = $db->Prepare("SELECT *
	                   FROM persona
	                   WHERE estado <> '0'
	                   AND persona_pk > 1
	                   ORDER BY persona_pk DESC
	                   LIMIT ? OFFSET ?
	                   ");


$smarty->assign("personas",$db->GetAll($sql3, array($nElem, $regIni)));
$smarty->assign("direc_css",$direc_css);
$smarty->display("personas.tpl");
<?php echo '?>';
}
}
