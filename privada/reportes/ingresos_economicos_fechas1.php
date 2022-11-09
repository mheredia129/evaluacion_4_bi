<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
$smarty =new Smarty();
/*$sql= $db->Prepare("SELECT *
	                   FROM ingresos_economicos ig 
	                   INNER JOIN domicilios d ON ig.domicilio_pk = d.domicilio_pk
                       INNER JOIN efectivo_disponible  ed ON ig.efectivo_disponible_pk = ig.efectivo_disponible_pk
	                   WHERE ig.estado <> '0'
	                   AND d.estado <> '0'
	                   AND ed.estado <> '0'
	                   ORDER BY (ig.ingreso_economico_pk) DESC
                        ");*/

$sql= $db->Prepare("SELECT * FROM vistas_ingresos_economicos;
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

$smarty->assign("ingresos_economicos",$rs);
$smarty->assign("logo",$logo);
$smarty->assign("fecha",$fecha);
$smarty->assign("direc_css",$direc_css);
$smarty->display("ingresos_economicos_fechas1.tpl");
