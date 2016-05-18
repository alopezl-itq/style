<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css">		
<title>Registrar Cliente</title>

<script type="text/javascript">
	function NuevoCliente()
{
	document.getElementById("NuevoC").style.display="block";
document.getElementById("ClienteSel").style.display="none";	}


</script>

              
</head>
<body>
<div id='nuevocliente'>
<table><tr><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;Datos del Cliente</td></tr>
<td>Nombre:<input type="text" name="clienteN" id="clienteN"></td>
<td>Direccion:<input type="text" name="clienteD" id="clienteD"></td>
<td>Ciudad:<select ><option value="1">seleccione</option>
<option value="Queretaro">Queretaro</option>
<select></td>
<td>Estado:<select ><option value="1">seleccione</option>
<option value="Queretaro">Queretaro</option>
<select></td><td>Telefono:<input type="text" name="clienteT" id="clienteT">
	<td>E-mail:<input type="text" name="clienteE" id="clienteE"></td></table>
</div>
</div>

</body>
</html>