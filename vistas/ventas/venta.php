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
	}
</script>

              
</head>
<body>
<table align="center">
<TR align="center">
<td ></td> 
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
</body>
</html>