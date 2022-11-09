<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
$descripcion_del_gasto = $_POST["descripcion_del_gasto"];
$date = $_POST["date"];

$formulario = $_POST["formulario"];
echo"los valores introducidos  de $formulario son: 
 <br> descripcion del gasto : $descripcion_del_gasto
  <br> DATE : $date;
  ";
  $smarty->display("gastos.html");
?>
