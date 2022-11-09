<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$__gasto_pk = $_POST['gasto_pk'];

	var_dump($__gasto_pk);
$smarty = new Smarty;
//$db->debug=true;

$sql = $db->Prepare("SELECT *
                     FROM gastos
                     WHERE domicilio_pk = ?
                     AND estado <> '0'
                     ");
$rs = $db->GetAll($sql, array($__gasto_pk));

if($rs ){
	
	$reg = array();
	$reg ["estado"] = '0';
    $reg["usuario"] = $_SESSION['sesion_usuario_pk'];
    $reg["fec_modificacion"]= date("Y-m-d H:i:s");
	$rs1 = $db->AutoExecute("gastos", $reg, "UPDATE", "gasto_pk='".$__gasto_pk."'");
	header("Location:gastos.php");
	exit();
}else {
	$smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("gastos_eliminar.tpl");
}
?>