<?php 

include('infoventa.php');
include('nuevocliente.php');
include('selectcliente.php');
include('selectventa.php');
include('tipopago.php');
include('mostrarventa.php');
include('totalventa.php');


?>


<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css">		
<title>Venta</title>

<script type="text/javascript">
	function NuevoCliente()
{
	document.getElementById("NuevoC").style.display="block";
document.getElementById("ClienteSel").style.display="none";	}
	function ClienteSelect()
{
	document.getElementById("ClienteSel").style.display="block";
	document.getElementById("NuevoC").style.display="none";
	var selCliente=$F("usuarioSelec");
	document.getElementById("clienteNe").value=selCliente;
	valoresCliente();
	}
	function valoresCliente(){
		var Nestor='Nestor';
		var clienteN='Los Olvera';
		var ciudad='Queretaro';
		var estado='Queretaro';
		var clienteT='123412213';
		var clienteE='Nestor@gay';
	document.getElementById("clienteNe").value=Nestor;
document.getElementById("clienteN").value=clienteN;
document.getElementById("ciudad").value=ciudad;
document.getElementById("estado").value=estado;
document.getElementById("clienteT").value=clienteT;
document.getElementById("clienteE").value=clienteE;

	}
</script>

              
</head>

<body style="background-color:black;color:white; background-size:800px 800px; background-repeat:no-repeat" background="../../images/logo.jpg" >
<table align="center">
<TR align="center">
<td ><input type="hidden" id="dato1" name="dato1" ></td> 
<td align="right"><a  onClick="ocultar()" align="center" style="cursor:pointer"></a></td>
</TR>
</table>
<div id='infoventa'>
</div>
<div id='nuevocliente'>
</div>
<div id='selectcliente'>
</div>
<div id='selectventa'>
</div>
<div id='tipopago'>
</div>
<div id='mostrarventa'>
</div>
<div id='totalventa'>
</div>
//
</body>
</html>