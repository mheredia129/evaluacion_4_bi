<!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" href="../{$direc_css}"type="text/css">
	<meta charset="	UTF-8">
	{literal}
<script type="text/javascript">
function validar(){
	genero = document.formu.genero.value;
   if (document.formu.genero.value =="") {
    alert("por favor selecione el genero");
    document.formu.genero.focus();
    return;
}
ventanaCalendario = window.open("rtp_personas_genero1.php?genero=" +genero, "calendario", "width=600, heigth=550,left=100,top=100, scrollbars=yes, menubars=no, statusbas=NO, status=NO, resizable=YES, location=NO")
}
</script>
{/literal}
</head>
<body>
	<div class="estil">
		<br>
		<h1>RTP DE PERSONAS POR GENERO</h1>
		<form method="post" name="formu">
       <p>
       	<b>*selecione genero</b>
       	<select name="genero">
       	<option value="">--selecione--</option>
       	<option value="T">TODOS</option>
       	<option value="F">FEMENINO</option>
       	<option value="M">MASCULINO</option>
       	</select>
       </p>
        
          <p>
         
      <input type="hidden" name="accion" value="">
			<input type="button" value="Aceptar" onclick="validar();" class="boton2">
          
          </p>
 
		</form>
	</div>
</body>
</html>