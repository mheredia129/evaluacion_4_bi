<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$persona_pk=$_REQUEST['persona_pk'];

$smarty=new Smarty;



$db->debug=true;

$sql=$db->Prepare("SELECT *
	               FROM persona
	               WHERE persona_pk = ?
	               AND estado <> '0'

	               ");
$rs = $db->GetAll($sql, array($persona_pk));




$sql1=$db->Prepare("SELECT * 
	                   FROM sistema
	                   WHERE sistema_pk =1 
	                   AND estado <> '0' 
	               
	                   ");
$rs1=$db->GetAll($sql1);
$nombre=$rs1[0]["nombre"];

$logo=$rs1[0]["logo"];



$smarty->assign("logo",$logo);

$smarty->assign("persona",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("ficha_tec_personas1.tpl");

?>