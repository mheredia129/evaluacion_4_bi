<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../paginacion.inc.php");
//$direc_css ="../css/colores.css";
$smarty= new  Smarty;
//$db->debug=true;

$sql3 = $db->Prepare("SELECT *
	                   FROM clientes cl , cuentas cu
	                   WHERE cu.id_cuenta = cl.id_cliente
	                   AND cl.id_cliente > 0
	              
	                 
	                   ");
$rs=$db->GetAll($sql3);

$smarty->assign("personas",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("personas.tpl");
?>
