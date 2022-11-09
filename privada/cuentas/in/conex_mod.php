<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
$smarty= new  Smarty;
$db->debug=false;
 $persona_pk= $_POST['persona_pk'];

$sql = $db->Prepare("SELECT *
	                   FROM persona
	                   WHERE estado <> '0'
	                   AND persona_pk = ?	                
	                   ");
$rs=$db->GetAll($sql, array($persona_pk));



$smarty->assign("persona_modificar",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("persona_modificar.tpl");
?>


