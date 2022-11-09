<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

//$direc_css ="../css/colores.css";
$smarty= new  Smarty;
//$db->debug=true;
$sql = $db->Prepare("SELECT *
	                   FROM domicilios d, tipo_inmueble ti , propietario p
	                   WHERE  d.tipo_inmueble_pk= ti.tipo_inmueble_pk
	                   AND    d.propietario_pk=p.propietario_pk              
	                   AND ti.estado <>'0'
	                   AND d.estado <>'0'	
	                   AND p.estado <>'0'	                        
	                   ORDER BY d.domicilio_pk DESC
	                 
	                   ");
$rs=$db->GetAll($sql);


$smarty->assign("domicilios",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("domicilios.tpl");
?>