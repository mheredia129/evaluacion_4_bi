<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

//$direc_css ="../css/colores.css";
$smarty= new  Smarty;
//$db->debug=true;

$sql = $db->Prepare("SELECT *
	                   FROM ingresos_economicos ig 
	                   INNER JOIN domicilios d ON ig.domicilio_pk = d.domicilio_pk
                       INNER JOIN efectivo_disponible  ed ON ig.efectivo_disponible_pk = ig.efectivo_disponible_pk
	                   WHERE ig.estado <> '0'
	                   AND d.estado <> '0'
	                   AND ed.estado <> '0'
	                   ORDER BY (ig.ingreso_economico_pk) DESC

	                  
	                   ");
$rs=$db->GetAll($sql);

$smarty->assign("ingresos_economicos",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("ingresos_economicos_fechas.tpl");
?>

