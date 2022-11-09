<?php
$nombre = $_POST["nombre"];
$apellido_paterno = $_POST["apellido_paterno"];
$apellido_materno = $_POST["apellido_materno"];
$date = $_POST["date"];
$numero_de_celular = $_POST["numero_de_celular"];
$formulario = $_POST["formulario"];
echo"los valores introducidos  de $formulario son: 
 <br> NOMBRE : $nombre
 <br> APELLIDO PATERNO : $apellido_paterno
  <br>APELLIDO MATERNO : $apellido_materno
  <br> DATE : $date;
  <br>NUMERO DE CELULAR : $numero_de_celular";
?>
