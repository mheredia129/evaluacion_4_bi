<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

//$direc_css ="../css/colores.css";
$smarty= new  Smarty;
//$db->debug=true;

$sql = $db->Prepare("SELECT *
	                   FROM persona p, usuarios u
	                   WHERE p.persona_pk =u.persona_pk 
	                   AND p.estado <> '0'
	                   AND u.estado <> '0'
	                   ORDER BY (u.persona_pk) DESC
	                  
	                   ");
$rs=$db->GetAll($sql);

$smarty->assign("personas_usuarios",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("personas_usuarios.tpl");
?>