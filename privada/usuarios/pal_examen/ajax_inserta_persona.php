<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
//recibe las varibles desde el insertar de la funcion para  insertar
$ap1 = $_POST["ap1"];
$am1 = $_POST["am1"];
$nombres1 = $_POST["nombres1"];
$ci1 = $_POST["ci1"];
$direccion1 = $_POST["direccion1"];
$telef1 = $_POST["telef1"];


//var_dump( $_POST);
//$db->debug=true;

//$smarty = new Smarty;
//guarda las variables que llegan con sus valores por mediante del array en la ba se de datos
$reg = array();
$reg["sistema_pk"] = 1;
$reg["apellido_paterno"] = $ap1;
$reg["apellido_materno"] = $am1;
$reg["nombres"] = $nombres1;
$reg["ci"] = $ci1;
$reg["direccion"] = $direccion1;
$reg["numero_de_celular"] = $telef1;
$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["estado"] = '1';
$reg["usuario"] = $_SESSION["sesion_usuario_pk"];
$rs1 = $db->AutoExecute("persona", $reg, "INSERT");
?>