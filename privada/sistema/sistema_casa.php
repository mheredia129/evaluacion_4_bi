<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
$smarty = new Smarty;
$sql = $db->Prepare(
"SELECT *
 FROM sistema 
 WHERE sistema_pk = 1
");
$rs = $db->GetAll($sql);
$smarty->assign("sistema_casa",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("sistema_casa.tpl",$rs);
?>