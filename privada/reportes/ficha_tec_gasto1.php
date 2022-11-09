<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$gasto_pk=$_REQUEST['gasto_pk'];

$smarty=new Smarty;



$db->debug=false;

$sql=$db->Prepare("SELECT *
	                   FROM gastos g,domicilios d,tipos_gastos tg,efectivo_disponible ed 
	                   WHERE  g.domicilio_pk= d.domicilio_pk
	                   AND    g.tipo_gasto_pk=tg.tipo_gasto_pk
	                   AND    g.efectivo_disponible_pk=ed.efectivo_disponible_pk
	                   AND g.gasto_pk = ?
	                   AND g.estado <>'0'
	                   AND d.estado <>'0'	
	                   AND tg.estado <>'0'
	                   AND ed.estado <>'0'            
	                   ORDER BY g.gasto_pk DESC;

	               ");
$rs = $db->GetAll($sql, array($gasto_pk));


$sql1=$db->Prepare("SELECT * 
	                   FROM sistema
	                   WHERE sistema_pk =1 
	                   AND estado <> '0' 
	               
	                   ");
$rs1=$db->GetAll($sql1);
$nombre=$rs1[0]["nombre"];
$logo=$rs1[0]["logo"];



$smarty->assign("logo",$logo);

$smarty->assign("gastos",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("ficha_tec_gasto1.tpl");

?>