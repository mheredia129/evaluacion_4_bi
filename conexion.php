<?php
require_once("adodb/adodb.inc.php");

$direc_css ="../css/colores.css";

$conServidor ="localhost";
$conUsuario ="root";
$conClave ="";
$conBasededatos ="bd_sistema_cuentas_domicilio";


$db = ADONewConnection("mysqli");
//$db->debug=true;
$conex=$db->connect($conServidor,$conUsuario,$conClave,$conBasededatos);

$db->Execute("SET NAMES 'utf8'");
?>