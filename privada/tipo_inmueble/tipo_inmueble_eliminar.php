<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
$__tipo_inmueble_pk = $_POST['tipo_inmueble_pk'];
var_dump($__tipo_inmueble_pk);
$smarty = new Smarty;
$db->debug=true;
$sql = $db->Prepare("SELECT *
	                   FROM tipo_inmueble
	                   WHERE estado <> '0'
	                   AND tipo_inmueble_pk = ?	                
	                   ");
$rs = $db->GetAll($sql, array($__tipo_inmueble_pk));
if ($rs){
	$reg =array();
	$reg["estado"] ='0';
    $reg["usuario"] = $_SESSION['sesion_usuario_pk'];
    $reg["fec_modificacion"]= date("Y-m-d H:i:s");
	$rs1 = $db->AutoExecute("tipo_inmueble", $reg, "UPDATE", "tipo_inmueble_pk='".$__tipo_inmueble_pk."'");
	header("Location:tipo_inmueble.php");
	exit();
}else {
$smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!!!!!!");
$smarty->assign("direc_css", $direc_css);
$smarty->display("tipo_inmueble_eliminar.tpl");
}
?>

