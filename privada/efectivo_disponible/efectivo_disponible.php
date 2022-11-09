<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../paginacion.inc.php");
//$direc_css ="../css/colores.css";
$smarty= new  Smarty;
$db->debug=false;

$sql = $db->Prepare("SELECT *
	                   FROM efectivo_disponible
	                   WHERE estado <> '0'
	                   AND efectivo_disponible_pk > 0
	                  
	                   ");


$rs=$db->GetAll($sql);


$smarty->assign("efectivo_disponible",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("efectivo_disponible.tpl");
?>