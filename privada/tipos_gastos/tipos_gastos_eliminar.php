<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
$__tipo_gasto_pk = $_POST['tipo_gasto_pk'];
$smarty = new Smarty;
$db->debug=true;
$sql = $db->Prepare("SELECT *
	                   FROM gastos
	                   WHERE estado <> '0'
	                   AND tipo_gasto_pk = ?	                	                   
	                   ");
$rs = $db->GetAll($sql, array($__tipo_gasto_pk));
if (!$rs){
	$reg =array();
	$reg["estado"] ='0';
    $reg["usuario"] = $_SESSION['sesion_usuario_pk'];
    $reg["fec_modificacion"]= date("Y-m-d H:i:s");
	$rs1 = $db->AutoExecute("tipos_gastos", $reg, "UPDATE", "tipo_gasto_pk='".$__tipo_gasto_pk."'");
	var_dump($rs1);
	header("Location:tipos_gastos.php");
	exit();
}else {
$smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!!!!!!");
$smarty->assign("direc_css", $direc_css);
$smarty->display("tipos_gastos_eliminar.tpl");
}
?>

