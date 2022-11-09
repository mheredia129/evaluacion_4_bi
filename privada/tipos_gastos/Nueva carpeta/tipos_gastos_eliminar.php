<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
$__persona_pk = $_POST['persona_pk'];
$smarty = new Smarty;
$db->debug=true;
$sql = $db->Prepare("SELECT *
	                   FROM usuarios
	                   WHERE estado <> '0'
	                   AND persona_pk = ?	                	                   
	                   ");
$rs = $db->GetAll($sql, array($__persona_pk));
if (!$rs){
	$reg =array();
	$reg["estado"] ='0';
    $reg["usuario"] = $_SESSION['sesion_usuario_pk'];
    $reg["fec_modificacion"]= date("Y-m-d H:i:s");
	$rs1 = $db->AutoExecute("persona", $reg, "UPDATE", "persona_pk='".$__persona_pk."'");
	var_dump($rs1);
	header("Location:personas.php");
	exit();
}else {
$smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!!!!!!");
$smarty->assign("direc_css", $direc_css);
$smarty->display("persona_eliminar.tpl");
}
?>

