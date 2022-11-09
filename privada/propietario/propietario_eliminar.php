<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
$__propietario_pk = $_POST['propietario_pk'];
var_dump($__propietario_pk);
$smarty = new Smarty;
$db->debug=true;
$sql = $db->Prepare("SELECT *
	                   FROM propietario
	                   WHERE estado <> '0'
	                   AND propietario_pk = ?	                
	                   ");
$rs = $db->GetAll($sql, array($__propietario_pk));
if ($rs){
	$reg =array();
	$reg["estado"] ='0';
    $reg["usuario"] = $_SESSION['sesion_usuario_pk'];
    $reg["fec_modificacion"]= date("Y-m-d H:i:s");
	$rs1 = $db->AutoExecute("propietario", $reg, "UPDATE", "propietario_pk='".$__propietario_pk."'");
	header("Location:propietario.php");
	exit();
}else {
$smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!!!!!!");
$smarty->assign("direc_css", $direc_css);
$smarty->display("propietario_eliminar.tpl");
}
?>

