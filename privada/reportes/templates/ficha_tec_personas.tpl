<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}"type="text/css">
	 <script type="text/javascript" src="../../ajax.js"></script>
	<meta charset="	UTF-8">

<script type="text/javascript">
function buscar(){
			
			var d1,d2,d3,d4, ajax,url,param,contenedor;
			contenedor = document.getElementById('personas1');

			d1 = document.formu.paterno.value;
			d2 = document.formu.materno.value;
			d3 = document.formu.nombres.value;
			d4 = document.formu.ci.value;
			ajax = nuevoAjax();
			url = "ajax_buscar_persona.php"
			param = "paterno="+d1+"&materno="+d2+"&nombres="+d3+"&ci="+d4;
			ajax.open("POST",url,true);
			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			ajax.onreadystatechange = function(){
				if (ajax.readyState == 4){
					contenedor.innerHTML = ajax.responseText;

				}
			}
			ajax.send(param);
		}

function mostrar(persona_pk){
	var d1 ,ventanaCalendario;
	d1 = persona_pk;
ventanaCalendario = window.open("ficha_tec_personas1.php?persona_pk="+d1, "calendario", "width=600, heigth=550,left=100,top=100, scrollbars=yes, menubars=no, statusbas=NO, status=NO, resizable=YES, location=NO")
}
</script>

</head>
<body>
	<center>
		<br>
		<h1>FICHA TECNICA PERSONAS</h1>
		<form method="post" name="formu">
        <table border="1">
        <tr>
        <th>paterno</th><th>:</th>
        <td><input type="text" name="paterno"  value=""  size="10" onkeyup="buscar()"></td>
         <th>materno</th><th>:</th>
        <td><input type="text" name="materno"  value=""  size="10" onkeyup="buscar()"></td>
          <th>nombres</th><th>:</th>
        <td><input type="text" name="nombres"  value=""  size="10" onkeyup="buscar()"></td>
             <th>C.I</th><th>:</th>
        <td><input type="text" name="ci"  value=""  size="10" onkeyup="buscar()"></td>

        </tr>

      </table>
		</form>
	</center>
	<center>
		<div id="personas1">
		</div>
	</center>
</body>
</html>