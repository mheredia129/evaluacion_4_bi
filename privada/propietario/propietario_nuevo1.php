<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
var_dump($_POST);
$nombres = $_POST["nombres"];
$apellido_paterno = $_POST["apellido_paterno"];
$apellido_materno = $_POST["apellido_materno"];
$fecha_nacimiento = $_POST["date"];
$numero_de_celular = $_POST["numero_de_celular"];


$db->debug=true;
 $smarty = new Smarty;

 $reg = array();
 var_dump($reg);
 $reg["sistema_pk"] = 1;
 $reg["nombre"] =$nombres;
 $reg["apellido_paterno"] = $apellido_paterno;
 $reg["apellido_materno"] = $apellido_materno;
  $reg["fecha_nacimiento"] = $fecha_nacimiento;
 $reg["numero_de_celular"] = $numero_de_celular;

 $reg["fec_insercion"] = date("Y-m-d H:i:s");
 $reg["estado"] = 1;
 $reg["usuario"] = $_SESSION['sesion_usuario_pk'];
 $rs1 =$db->AutoExecute("propietario",$reg,"INSERT");

 if($rs1){
  header("location:propietario.php");
  exit();
 }else{
 	$smarty->assign("mensaje","ERROR:los datos no se insertaron!!!");
 	$smarty->assign("direc_css",$direc_css);
 	$smarty->display("propietario_nuevo1.tpl");
 }

?>