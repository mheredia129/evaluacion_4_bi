<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
$smarty= new  Smarty;
$db->debug=false;

$sql = $db->Prepare("SELECT *
	                   FROM domicilios d , efectivo_disponible ed, gastos ie
	                   WHERE ed.efectivo_disponible_pk = ie.gasto_pk
	                   AND d.domicilio_pk = ie.domicilio_pk
	                   AND d.estado <> '0'
	                   AND ed.estado <>  '0'
	                   AND ie.estado <> '0'
	                   ORDER BY d.domicilio_pk DESC  	                
	                   ");
$rs=$db->GetAll($sql);

$sql1 = $db->Prepare("SELECT *
	                   FROM efectivo_disponible ed
	                   WHERE ed.estado <> '0'
	                   ORDER BY ed.efectivo_disponible_pk DESC  	                
	                   ");
$rs1=$db->GetAll($sql1);

$sql3 = $db->Prepare("SELECT *
 					FROM domicilios
 					WHERE domicilio_pk <> '1'
 					AND estado <> '0'
 					");
$rs3 = $db->GetAll($sql3);


$smarty->assign("domicilios",$rs);
$smarty->assign("efectivo_disponible",$rs1);

$smarty->assign("domicilio",$rs3);
$smarty->assign("direc_css",$direc_css);
$smarty->display("gastos_nuevo.tpl");
?>
