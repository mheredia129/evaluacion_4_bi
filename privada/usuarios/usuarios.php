<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

//$direc_css ="../css/colores.css";
$smarty= new  Smarty;
//$db->debug=true;
$sql = $db->Prepare("SELECT *
	                   FROM usuarios u, persona p 
	                   WHERE u.persona_pk=p.persona_pk
	                   AND u.estado <>'0'
	                   AND p.estado <>'0'	            
	                   ORDER BY u.usuario_pk DESC
	                 
	                   ");
$rs=$db->GetAll($sql);


$smarty->assign("usuarios",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("usuarios.tpl");
?>