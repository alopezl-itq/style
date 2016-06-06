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
$sSQL="Update Sexo Set descripcion='$_POST[descripcion]' Where id_sexo='$_POST[id_sexo]'";
$update = $db->update($sSQL);
?>

<h1><div align="center">Registro Actualizado</div></h1>
<meta http-equiv="refresh" content="5;URL= \modificar.php> 
<div align="center"><a href="modificar.php">Volver</a></div>
</BODY>
</HTML> 