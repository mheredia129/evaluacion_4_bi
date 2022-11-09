<td align='center'>
      <form name='formModif".$fila["persona_pk"]."' method='post' action='persona_modificar.php'>
      <input type='hidden' name='persona_pk' value='".$fila['persona_pk']."'>
      <a href='javascrip:document.formModif".$fila['persona_pk'].".submit();' title='modificar personas del sistema'>
      MODIFICAR>>>>>>
      </a>
      </form>}
      </td>
      <td align='center'>
      <form name='formElimi".$fila["persona_pk"]."' method='post' action='persona_eliminar.php'>
      <input type='hidden' name='persona_pk' value='".$fila['persona_pk']."'>
      <a href='javascrip:document.formElimi".$fila['persona_pk'].".submit();' title='eliminar personas del sistema' onclick='javascrip:return(confirm(desea elimnar persona))';
      Location.href='persona_eliminar.php'>
    
      ELIMINAR>>>>>>
      </a>
      </form>}
      </td>