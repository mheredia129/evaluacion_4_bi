<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$paterno =strip_tags(stripslashes($_POST["paterno"]));
$materno =strip_tags (stripslashes($_POST["materno"]));
$nombre = strip_tags(stripslashes($_POST["nombre"]));
$num_cel = strip_tags(stripslashes($_POST["num_cel"]));

//var_dump($paterno);
$db->debug=false;
if ($paterno or $materno or $nombre or $num_cel){
  $sql3=$db->Prepare("
  SELECT *
  FROM propietario
  WHERE apellido_paterno like ?
  AND apellido_materno like ?
  AND nombre like ?
  AND numero_celular like ?
  AND estado <> '0'

  ");
  $rs3 =$db->GetAll($sql3, array($paterno."%",$materno."%",$nombre."%",$num_cel."%"));
  // code...

//var_dump($rs3);

  if ($rs3){
    echo"<center>
    <table class='listado'>
    <tr>
    <th>PATERNO</th><th>MATERNO</th><th>NOMBRES</th><th>numero de celular</th><th><img src='../../imagenes/modificar.png'></th><th><img src='../../imagenes/borrar1.jpg'></th>
    </tr>";
    foreach($rs3 as $k => $fila) {
      
      $str1 = $fila["apellido_paterno"];
      $str2 = $fila["apellido_materno"];
      $str3 = $fila["nombre"];
      $str = $fila["numero_celular"];
      echo"<tr>
      
      <td>".resaltar($paterno,$str1)."</td>
      <td>".resaltar($materno,$str2)."</td>
      <td>".resaltar($nombre,$str3)."</td>  
      <td align ='center'>".resaltar($num_cel,$str)."</td>  
      <td align='center'>
      <form name='formModif".$fila['propietario_pk']."' method='post' action='propietario_modificar.php'>
      <input type='hidden' name='propietario_pk' value='".$fila['propietario_pk']."'>
      <a href='javascript:document.formModif".$fila['propietario_pk'].".submit();' title='modificar propietario del sistema'>
      MODIFICAR>>>>>>
      </a>
      </form>
      </td>

      <td align='center'>
      <form name='formElimi".$fila["propietario_pk"]."' method='post' action='propietario_eliminar.php'>
      <input type='hidden' name='propietario_pk' value='".$fila['propietario_pk']."'>
      <a href='javascript:document.formElimi".$fila['propietario_pk'].".submit();' title='eliminar personas del sistema' onclick='javascript:return(confirm(\"desea realmente eliminar a la persona..?\"))';
      location.href='propietario_eliminar.php''>
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
