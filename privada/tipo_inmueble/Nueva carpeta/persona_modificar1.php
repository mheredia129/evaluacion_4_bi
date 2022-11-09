<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$__persona_pk =$_POST["persona_pk"];
$__ci = $_POST["ci"];
var_dump($_POST);

$__nombres =$_POST["nombres"];
$__ap = $_POST["apellido_paterno"];
$__am = $_POST["apellido_materno"];
$__telefono =$_POST["numero_de_celular"];

//$db->debug=true;

$Smarty =new  Smarty;
$reg =array();
$reg["ci"] =$__ci;
$reg["nombres"] =$__nombres;
$reg["ap"] =$__ap;
$reg["am"] =$__am;
$reg["numero_de_celular"] =$__telefono;
$reg["usuario"] = $_SESSION['sesion_usuario_pk'];
$reg["fec_modificacion"]= date("Y-m-d H:i:s");
$rs1 = $db->AutoExecute("persona",$reg, "UPDATE","persona_pk='".$__persona_pk."'");

if ($rs1) {
	header("Location: personas.php");
	exit();
}else {
  $Smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!!!!!!!");
   $Smarty->assign("direc_css", $direc_css);
   $Smarty->assign("persona_pk", $__persona_pk);
   $Smarty->assign("persona_modificar1.tpl");
}
?>
