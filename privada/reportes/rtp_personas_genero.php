<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
$smarty = new Smarty;
//$db->debug = true;

$sql = $db->Prepare("SELECT *
	                   FROM gastos g,domicilios d,tipos_gastos tg,efectivo_disponible ed 
	                   WHERE  g.domicilio_pk= d.domicilio_pk
	                   AND    g.tipo_gasto_pk=tg.tipo_gasto_pk
	                   AND    g.efectivo_disponible_pk=ed.efectivo_disponible_pk
	                   AND g.estado <>'0'
	                   AND d.estado <>'0'	
	                   AND tg.estado <>'0'
	                   AND ed.estado <>'0'            
	                   ORDER BY g.gasto_pk DESC;
	                 
	                   ");
$rs=$db->GetAll($sql);


$smarty->assign("gastos",$rs);


$smarty->assign("direc_css", $direc_css);
$smarty->display("rtp_personas_genero.tpl");
?>