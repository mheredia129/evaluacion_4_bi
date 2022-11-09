<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
$smarty= new  Smarty;
$db->debug=false;
 $tipo_gasto_pk= $_POST['tipo_gasto_pk'];

$sql = $db->Prepare("SELECT *
	                   FROM tipos_gastos
	                   WHERE estado <> '0'
	                   AND tipo_gasto_pk = ?	                
	                   ");
$rs=$db->GetAll($sql, array($tipo_gasto_pk));

$smarty ->assign("tipos_gastos", $rs);
$smarty ->assign("direc_css", $direc_css);
$smarty ->display("tipos_gastos_modificar.tpl");
?>


