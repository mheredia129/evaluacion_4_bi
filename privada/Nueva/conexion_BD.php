<?php
require_once("adodb/adodb.inc.php");
$direc_css="../css/colores.css";

$conServidor ="localhost";
$conUsuario ="root";
$conClave =" ";
$conBasedatos ="BD_sistema_cuentas_domicilio";


$bd = ADOnewConnection("mysqli");
$bd -> debeg = false;
$conex = $bd->connect($conServidor,$conUsuario,$conClave,$conBasedatos);
$db -> Execute("SET NAMES'utf8");
?>