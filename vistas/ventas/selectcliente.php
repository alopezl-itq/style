<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css">		
<title>Venta</title>

<script type="text/javascript">
	function ClienteSelect()
{
	document.getElementById("ClienteSel").style.display="block";
	document.getElementById("NuevoC").style.display="none";
	var selCliente=$F("usuarioSelec");
	document.getElementById("clienteNe").value=selCliente;
	}
</script>
<script type="text/javascript">
	var checkbox = document.getElementById("estados"),
		ajax = function(url){
			var xhr = window.XMLHttpRequest ?
				new XMLHttpRequest() :
			new ActiveXObject("Microsoft.XMLHTTP") ||
			new ActiveXObject("Msxml2.XMLHTTP");

		};

	checkbox.addEventListener("click", function(){
		var estado = this.checked ? 1 : 0,
			id = this.getAttribute("data-id"),
			url = "ver_usuarios2.php?estado="+estado+"&id="+id;

		ajax(url);

	}, false);
</script>

              
</head>
<body>
	<div id='selectcliente'>
<table align="center"> 

<td><br><br>&nbsp;<select name="usuarioSelec" Onchange="ClienteSelect()">
		<option value="0">--Seleccione un Cliente --</option>
		<option value="Nestor">--Nestor --</option>
	</td></tr>
</table>
<div id="ClienteSel" style="display:none">
	<br>
<table><tr><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td></td></tr>


<div id="ClienteSel" style="display:none">
	
<table><tr><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td><br>Datos del Cliente<br></td></tr>
<td>Nombre:<input type="text" name="clienteNe" id="clienteN" value='nestor'></td>
<td>Direccion:<input type="text" name="clienteN" id="clienteN" value='Queretaro'></td>
<td>Ciudad:<select name='ciudad'><option value="1" >seleccione</option>
<option value="Queretaro" selected>Queretaro</option>
<select></td>
<td>Estado:<select name="id_estado">
			<option value="" selected>Selecciona un Estado</option>
			<?php

			$ventas = new ventas();

			$resultado4=$ventas->verestados();
			while($row=mysqli_fetch_array($resultado4)){

				echo '<option value="'.$row["id_estado"].'">'.$row["descripcion_estados"].'</option>';
			}

			?>

		</select>
</td><td>Telefono:<input type="text" name="clienteT" id="clienteT" value='1232121'>
	<td>E-mail:<input type="text" name="clienteE" id="clienteE " value='ejem@ejeml.com'></td></table>
	<input type="hidden" name="id_cliente" id="id_cliente" placeholder="" value="1"></td>
</div>
</div>

</div>


<br><br><br><br><br>

</table>
</body>
</html>