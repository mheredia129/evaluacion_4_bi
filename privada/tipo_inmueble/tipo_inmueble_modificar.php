<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
$smarty= new  Smarty;
$db->debug=false;
 $tipo_inmueble_pk= $_POST['tipo_inmueble_pk'];

$sql = $db->Prepare("SELECT *
	                   FROM tipo_inmueble
	                   WHERE estado <> '0'
	                   AND tipo_inmueble_pk = ?	                
	                   ");
$rs=$db->GetAll($sql, array($tipo_inmueble_pk));

$smarty ->assign("tipo_inmueble", $rs);
$smarty ->assign("direc_css", $direc_css);
$smarty ->display("tipo_inmueble_modificar.tpl");
?>


