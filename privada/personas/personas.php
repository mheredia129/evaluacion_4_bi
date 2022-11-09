<?php
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
?>