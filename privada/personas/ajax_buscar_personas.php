<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$paterno =strip_tags(stripslashes($_POST["paterno"]));
$materno =strip_tags (stripslashes($_POST["materno"]));
$nombre = strip_tags(stripslashes($_POST["nombre"]));
$ci = strip_tags(stripslashes($_POST["ci"]));

$db->debug=false;
if ($paterno or $materno or $nombre or $ci){
  $sql3=$db->Prepare("
  SELECT *
  FROM persona
  WHERE apellido_paterno like ?
  AND apellido_materno like ?
  AND nombres like ?
  AND ci like ?
  AND estado <> '0'

  ");
  $rs3 =$db->GetAll($sql3, array($paterno."%",$materno."%",$nombre."%",$ci."%"));
  // code...

  if ($rs3){
    echo"<center>
    <table class='listado'>
    <tr>
    <th>C.I</th><th>PATERNO</th><th>MATERNO</th><th>NOMBRES</th><th><img src='../../imagenes/modificar.png'></th><th><img src='../../imagenes/borrar1.jpg'></th>
    </tr>";
    foreach($rs3 as $k => $fila) {
      $str = $fila["ci"];
      $str1 = $fila["apellido_paterno"];
      $str2 = $fila["apellido_materno"];
      $str3 = $fila["nombres"];
      echo"<tr>
      <td align ='center'>".resaltar($ci,$str)."</td>
      <td>".resaltar($paterno,$str1)."</td>
      <td>".resaltar($materno,$str2)."</td>
      <td>".resaltar($nombre,$str3)."</td>    
      <td align='center'>
      <form name='formModif".$fila['persona_pk']."' method='post' action='persona_modificar.php'>
      <input type='hidden' name='persona_pk' value='".$fila['persona_pk']."'>
      <a href='javascript:document.formModif".$fila['persona_pk'].".submit();' title='modificar personas del sistema'>
      MODIFICAR>>>>>>
      </a>
      </form>
      </td>

      <td align='center'>
      <form name='formElimi".$fila["persona_pk"]."' method='post' action='persona_eliminar.php'>
      <input type='hidden' name='persona_pk' value='".$fila['persona_pk']."'>
      <a href='javascript:document.formElimi".$fila['persona_pk'].".submit();' title='eliminar personas del sistema' onclick='javascript:return(confirm(\"desea realmente eliminar a la persona..?\"))';
      location.href='persona_eliminar.php''>
      ELIMINAR>>>>>>
  
      </a>
      </form>
      </td>
      </tr>";
    }
echo"</table>
</center>";

  }else{
    echo "<center><b> la persona no existe</b></center><br>";
  }
}

?>
