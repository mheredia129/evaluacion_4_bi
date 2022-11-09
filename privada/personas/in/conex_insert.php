<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
$smarty= new  Smarty;
//$db->debug=true;

$sql3 = $db->Prepare("SELECT *
	                   FROM persona
	                   WHERE estado <> '0'
	                   AND persona_pk > 1	                
	                   ");
$rs=$db->GetAll($sql3);


$smarty->assign("persona_nuevo",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("persona_nuevo.tpl");

?>


