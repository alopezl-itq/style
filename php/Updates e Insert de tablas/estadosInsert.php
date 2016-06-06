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
$sSQL="INSERT INTO estados(descripcion_estados) VALUES ('$_POST[descripcion]')";
$insert = $db->insert($sSQL);
?>

<h1><div align="center">Registro Actualizado</div></h1>
<meta http-equiv="refresh" content="5;URL= \modificar2.php> 
<div align="center"><a href="modificar.php">Volver</a></div>
</BODY>
</HTML> 