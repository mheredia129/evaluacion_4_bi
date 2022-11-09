<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
var_dump($_POST);

$domicilio_pk = $_POST["domicilio_pk"];
$efectivo_disponible_pk =  $_POST["efectivo_disponible_pk"];
$monto_in = $_POST["monto"];
$desc_in = $_POST["descripcion"];
$date =$_POST['date'];
var_dump($efectivo_disponible_pk);
$db->debug=true;
 $smarty = new Smarty;

 $reg = array();
 //var_dump($reg);
 $reg["domicilio_pk"] = $domicilio_pk;
  $reg["tipo_gasto_pk"] = '2';
  $reg["efectivo_disponible_pk"] = $efectivo_disponible_pk;
 $reg["monto"] =$monto_in;
 $reg["descripcion"] = $desc_in;
 $reg["fecha_gasto"] =$date;
 $reg["fec_insercion"] = date("Y-m-d H:i:s");
 $reg["estado"] = 1;
 $reg["usuario"] = $_SESSION['sesion_usuario_pk'];
 $rs1 =$db->AutoExecute("gastos",$reg,"INSERT");
 var_dump($rs1);

if($rs1){
  header("location:gastos.php");
  exit();
 }else{
 	$smarty->assign("mensaje","ERROR:los datos no se insertaron!!!");
 	$smarty->assign("direc_css",$direc_css);
 	$smarty->display("gastos_nuevo1.tpl");
 }

?>