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
<td>Nombre:<input type="text" name="clienteNe" id="clienteN"></td>
<td>Direccion:<input type="text" name="clienteN" id="clienteN"></td>
<td>Ciudad:<select ><option value="1">seleccione</option>
<option value="Queretaro">Queretaro</option>
<select></td>
<td>Estado:<select ><option value="1">seleccione</option>
<option value="Queretaro">Queretaro</option>
<select></td><td>Telefono:<input type="text" name="clienteT" id="clienteT">
	<td>E-mail:<input type="text" name="clienteE" id="clienteE"></td></table>
</div>
</div>

</div>


<br><br><br><br><br>

</table>
</body>
</html>