<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$__ingreso_economico_pk = $_POST['ingreso_economico_pk'];
	
$smarty = new Smarty;
//$db->debug=true;

$sql = $db->Prepare("SELECT *
                     FROM ingresos_economicos
                     WHERE domicilio_pk = ?
                     AND estado <> '0'
                     ");
$rs = $db->GetAll($sql, array($__ingreso_economico_pk));

if(!$rs ){
	var_dump("entra");
	$reg = array();
	$reg ["estado"] = '0';
    $reg["usuario"] = $_SESSION['sesion_usuario_pk'];
    $reg["fec_modificacion"]= date("Y-m-d H:i:s");
	$rs1 = $db->AutoExecute("ingresos_economicos", $reg, "UPDATE", "ingreso_economico_pk='".$__ingreso_economico_pk."'");
	header("Location:ingresos_economicos.php");
	exit();
}else {
	$smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("ingreso_economico_eliminar.tpl");
}
?>