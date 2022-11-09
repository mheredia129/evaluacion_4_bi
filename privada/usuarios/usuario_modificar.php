<?php 
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
$__usuario_pk = $_POST["usuario_pk"];
$__persona_pk = $_POST["persona_pk"];

$smarty = new Smarty;

//$db->debug=true;

$sql = $db->Prepare("SELECT *
 					FROM usuarios
 					WHERE usuario_pk = ?
 					");
$rs = $db->GetAll($sql, array($__usuario_pk));

$sql2 = $db->Prepare("SELECT *
 					FROM persona
 					WHERE persona_pk = ?
 					AND estado <> '0'
 					");
$rs2 = $db->GetAll($sql2, array($__persona_pk));

$sql3 = $db->Prepare("SELECT *
 					FROM persona
 					WHERE persona_pk <> ?
 					AND estado <> '0'
 					");
$rs3 = $db->GetAll($sql3, array($__persona_pk));

$smarty->assign("usuario", $rs);
$smarty->assign("persona", $rs2);
$smarty->assign("personas", $rs3);

$smarty->assign("direc_css", $direc_css);
$smarty->display("usuario_modificar.tpl");
?>