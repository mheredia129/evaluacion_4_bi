<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$propietario_pk=$_REQUEST['propietario_pk'];

$smarty=new Smarty;



$db->debug=true;

$sql=$db->Prepare("SELECT *
	               FROM propietario
	               WHERE propietario_pk = ?
	               AND estado <> '0'

	               ");
$rs = $db->GetAll($sql, array($propietario_pk));


$sql1=$db->Prepare("SELECT * 
	                   FROM sistema
	                   WHERE sistema_pk =1 
	                   AND estado <> '0' 
	               
	                   ");
$rs1=$db->GetAll($sql1);
$nombre=$rs1[0]["nombre"];
$logo=$rs1[0]["logo"];



$smarty->assign("logo",$logo);

$smarty->assign("propietario",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("ficha_tec_propietario1.tpl");

?>