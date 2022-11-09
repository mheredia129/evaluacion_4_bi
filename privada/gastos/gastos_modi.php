<?php 
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$__gasto_pk = $_POST["gasto_pk"];
$__domicilio_pk = $_POST["domicilio_pk"];
$__efectivo_disponible_pk = $_POST["efectivo_disponible_pk"];
$smarty = new Smarty;

//$db->debug=true;

$sql = $db->Prepare("SELECT *
 					FROM gastos ie
 					WHERE ie.gasto_pk = ?
 					");
$rs = $db->GetAll($sql, array($__gasto_pk));

$sql2 = $db->Prepare("SELECT *
 					FROM domicilios
 					WHERE domicilio_pk = ?
 					AND estado <> '0'
 					");
$rs2 = $db->GetAll($sql2, array($__domicilio_pk));

$sql3 = $db->Prepare("SELECT *
 					FROM domicilios
 					WHERE domicilio_pk <> ?
 					AND estado <> '0'
 					");
$rs3 = $db->GetAll($sql3, array($__domicilio_pk));


$sql4 = $db->Prepare("SELECT *
 					FROM efectivo_disponible
 					WHERE efectivo_disponible_pk = ?
 					AND estado <> '0'
 					");
$rs4 = $db->GetAll($sql4, array($__efectivo_disponible_pk));

$sql5 = $db->Prepare("SELECT *
 					FROM efectivo_disponible
 					WHERE efectivo_disponible_pk <> ?
 					AND estado <> '0'
 					");
$rs5 = $db->GetAll($sql5, array($__efectivo_disponible_pk));




$smarty->assign("gastos", $rs);
$smarty->assign("d1", $rs2);
$smarty->assign("d2", $rs3);
$smarty->assign("ed1", $rs4);
$smarty->assign("ed2", $rs5);

$smarty->assign("direc_css", $direc_css);
$smarty->display("gastos_modi.tpl");
?>