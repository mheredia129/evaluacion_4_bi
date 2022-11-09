<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$desc =strip_tags(stripslashes($_POST["desc"]));
$dec_gas =strip_tags (stripslashes($_POST["dec_gas"]));
$mont = strip_tags(stripslashes($_POST["mont"]));
var_dump($desc);
$db->debug=true;
if ($desc or $dec_gas or $mont){
  $sql3=$db->Prepare("
  SELECT *
  FROM gastos
  WHERE descripcion like ?
  AND fecha_gasto like ?
  AND monto like ?
  AND estado <> '0'

  ");
  $rs3 =$db->GetAll($sql3, array($desc."%",$dec_gas."%",$mont."%"));
  // code...
var_dump("");
//var_dump($rs3);

  if ($rs3){
    echo"<center>
    <table class='listado'>
    <tr>
    <th>DESCRIPCION</th><th>FECHA GASTO</th><th>MONTO</th><th><img src='../../imagenes/modificar.png'></th><th><img src='../../imagenes/borrar1.jpg'></th>
    </tr>";
    foreach($rs3 as $k => $fila) {
      
      $str1 = $fila["descripcion"];
      $str2 = $fila["fecha_gasto"];
      $str3 = $fila["monto"];
      echo"<tr>
      
      <td>".resaltar($desc,$str1)."</td>
      <td>".resaltar($dec_gas,$str2)."</td>
      <td>".resaltar($mont,$str3)."</td>  
      
      <td align='center'>
      <form name='formModif".$fila['gasto_pk']."' method='post' action='gastos_modif.php'>
      <input type='hidden' name='gasto_pk' value='".$fila['gasto_pk']."'>
      <a href='javascript:document.formModif".$fila['gasto_pk'].".submit();' title='modificar propietario del sistema'>
      MODIFICAR>>>>>>
      </a>
      </form>
      </td>

      <td align='center'>
      <form name='formElimi".$fila["gasto_pk"]."' method='post' action='gastos_eliminar.php'>
      <input type='hidden' name='gasto_pk' value='".$fila['gasto_pk']."'>
      <a href='javascript:document.formElimi".$fila['gasto_pk'].".submit();' title='eliminar personas del sistema' onclick='javascript:return(confirm(\"desea realmente eliminar a la persona..?\"))';
      location.href='gastos_eliminar.php''>
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
