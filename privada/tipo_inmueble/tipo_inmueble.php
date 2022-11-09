<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../paginacion.inc.php");
//$direc_css ="../css/colores.css";
$smarty= new  Smarty;
$db->debug=false;
contarRegistros($db,"tipo_inmueble");
paginacion("tipo_inmueble.php?",$smarty);


$sql3 = $db->Prepare("SELECT *
	                   FROM tipo_inmueble
	                   WHERE estado <> '0'
	                   AND tipo_inmueble_pk > 1
	                   ORDER BY tipo_inmueble_pk DESC
	                   LIMIT ? OFFSET ?
	                   ");


$smarty->assign("tipo_inmueble",$db->GetAll($sql3, array($nElem, $regIni)));
$smarty->assign("direc_css",$direc_css);
$smarty->display("tipo_inmueble.tpl");
?>