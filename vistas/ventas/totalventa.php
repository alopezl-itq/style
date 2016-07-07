<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css">		
<title>Total</title>
              	<script src="../../js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
</head>
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

<body>
<?php
$controlador = new controlador();
if(isset($_POST['enviar'])){
 $r =$controlador->crearventa($_POST['id_ventas'], $_POST['monto'], $_POST['fecha'],$_POST['id_cliente'],$_POST['id_usuario'],$_POST["id_empresa"]);






    if($r){
    echo 'se agrego un nuevo empleado';

    }else{
        echo'no se agrego el registro';
        }
    }
?>

<div id='totalventa'>
<table align="center" style="background-color:white;color:#E80078">
<tr><th>Pago Total&nbsp;&nbsp;<input type="text"></th><th>Descuento&nbsp;&nbsp;<input type="text"></th><th>Cantidad de Articulos&nbsp;&nbsp;<input type="text"></th><th>SubTotal&nbsp;&nbsp;<input type="text"></th></tr>
<tr><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total&nbsp;<input type="text" id="monto" name="monto"></th></tr>
<tr><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IVA&nbsp;&nbsp;<input type="text"></th></tr>
<tr><th></th><th></th><th></th><th>Referencia<input type="text"></th></tr>
<tr><th>&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit" name="enviar" id="enviar" value="Generar Venta"></th><th>&nbsp;&nbsp;</th></tr>

</table>
</div>
</body>
</html>