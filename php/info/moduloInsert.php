<HTML>
<HEAD>
<TITLE>modulo.php</TITLE>
</HEAD>
<BODY>
<?
//Conexion con la base

include_once("../../clases/conexion.php"); 
$db = new Conexion();
//Creamos la sentencia SQL y la ejecutamos
$sSQL="INSERT INTO `modulo`(descripcion,vista,controlador ) VALUES ('$_POST[descripcion]','$_POST[vista]','$_POST[controlador]')";
$insert = $db->insert($sSQL);
?>

<h1><div align="center">Registro Actualizado</div></h1>
<meta http-equiv="refresh" content="2;url=index.php">
</BODY>
</HTML> 