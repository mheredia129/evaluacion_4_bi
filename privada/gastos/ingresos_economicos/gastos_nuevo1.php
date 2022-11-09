<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
var_dump($_POST);

$domicilio_pk = $_POST["domicilio_pk"];
$efectivo_disponible_pk =  $_POST["efectivo_disponible_pk"];
$monto_in = $_POST["monto_in"];
$desc_in = $_POST["desc_in"];
$date =$_POST['date'];
var_dump($efectivo_disponible_pk);
$db->debug=true;
 $smarty = new Smarty;

 $reg = array();
 //var_dump($reg);
 $reg["domicilio_pk"] = $domicilio_pk;
  $reg["efectivo_disponible_pk"] = $efectivo_disponible_pk;
 $reg["monto"] =$monto_in;
 $reg["descripcion"] = $desc_in;
 $reg["fecha_ingreso"] =$date;
 $reg["fec_insercion"] = date("Y-m-d H:i:s");
 $reg["estado"] = 1;
 $reg["usuario"] = $_SESSION['sesion_usuario_pk'];
 $rs1 =$db->AutoExecute("ingresos_economicos",$reg,"INSERT");
 var_dump($rs1);

if($rs1){
  header("location:ingresos_economicos.php");
  exit();
 }else{
 	$smarty->assign("mensaje","ERROR:los datos no se insertaron!!!");
 	$smarty->assign("direc_css",$direc_css);
 	$smarty->display("ingreso_economico_nuevo1.tpl");
 }

?>