<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../paginacion.inc.php");
//$direc_css ="../css/colores.css";
$smarty= new  Smarty;
$db->debug=false;
contarRegistros($db,"tipos_gastos");
paginacion("tipos_gastos.php?",$smarty);


$sql3 = $db->Prepare("SELECT *
	                   FROM tipos_gastos
	                   WHERE estado <> '0'
	                   AND tipo_gasto_pk > 1
	                   ORDER BY tipo_gasto_pk DESC
	                   LIMIT ? OFFSET ?
	                   ");


$smarty->assign("tipos_gastos",$db->GetAll($sql3, array($nElem, $regIni)));
$smarty->assign("direc_css",$direc_css);
$smarty->display("tipos_gastos.tpl");
?>