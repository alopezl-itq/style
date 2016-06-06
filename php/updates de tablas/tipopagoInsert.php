<HTML>
<HEAD>
<TITLE>Sexo.php</TITLE>
</HEAD>
<BODY>
<?
//Conexion con la base
include_once("conexion.php"); 
$db = new Conexion();
//Creamos la sentencia SQL y la ejecutamos
$sSQL="INSERT INTO tipo_pago(descripcion_tipo_pago) VALUES ('$_POST[descripcion]')";
$insert = $db->insert($sSQL);
?>

<h1><div align="center">Registro Actualizado</div></h1>
<div align="center"><a href="modificar.php">Volver</a></div>
</BODY>
</HTML> 