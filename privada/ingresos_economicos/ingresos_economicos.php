<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

//$direc_css ="../css/colores.css";
$smarty= new  Smarty;
//$db->debug=true;
$sql = $db->Prepare("SELECT *
	                   FROM domicilios d, ingresos_economicos ec ,efectivo_disponible ed 
	                    WHERE  ec.domicilio_pk= d.domicilio_pk	                   
	                   AND    ec.efectivo_disponible_pk=ed.efectivo_disponible_pk
	                   AND ec.estado <>'0'
	                   AND d.estado <>'0'	
	                   AND ed.estado <>'0'            
	                   ORDER BY ec.ingreso_economico_pk DESC;
	                
	                   ");
$rs=$db->GetAll($sql);


$smarty->assign("ingresos_economicos",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("ingresos_economicos.tpl");
?>