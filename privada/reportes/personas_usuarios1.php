<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
$smarty =new Smarty();
$sql= $db->Prepare("SELECT * 
	                   FROM persona p, usuarios u
                       WHERE p.persona_pk=u.persona_pk
                        AND p.estado <> '0' 
                        AND u.estado <> '0' 
                        ORDER BY (u.persona_pk) DESC
                        ");
$rs=$db->GetAll($sql);
$sql1=$db->Prepare("SELECT * 
	                   FROM sistema
	                   WHERE sistema_pk =1 
	                   AND estado <> '0' 
	               
	                   ");
$rs1=$db->GetAll($sql1);
$nombre=$rs1[0]["nombre"];

$logo=$rs1[0]["logo"];

$fecha =date("Y-m-d H:i:s" );

$smarty->assign("personas_usuarios",$rs);
$smarty->assign("logo",$logo);
$smarty->assign("fecha",$fecha);
$smarty->assign("direc_css",$direc_css);
$smarty->display("personas_usuarios1.tpl");
