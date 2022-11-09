<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../paginacion.inc.php");
//$direc_css ="../css/colores.css";
$smarty= new  Smarty;
$db->debug=false;
contarRegistros($db,"propietario");
paginacion("propietario.php?",$smarty);


$sql3 = $db->Prepare("SELECT *
	                   FROM propietario
	                   WHERE estado <> '0'
	                   AND propietario_pk > 1
	                   ORDER BY propietario_pk DESC
	                   LIMIT ? OFFSET ?
	                   ");


$smarty->assign("propietario",$db->GetAll($sql3, array($nElem, $regIni)));
$smarty->assign("direc_css",$direc_css);
$smarty->display("propietario.tpl");
?>