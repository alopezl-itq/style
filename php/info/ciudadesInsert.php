<HTML>
<HEAD>
<TITLE>Ciudades.php</TITLE>
</HEAD>
<BODY>
<?
//Conexion con la base
include_once("../../clases/conexion.php"); 
$db = new Conexion();
//Creamos la sentencia SQL y la ejecutamos
$sSQL="INSERT INTO ciudades( descripcion_ciudades, id_municipio) VALUES ('$_POST[ciudad]','$_POST[id_municipio]')";
$insert = $db->insert($sSQL);
?>

<h1><div align="center">Registro Actualizado</div></h1>
<meta http-equiv="refresh" content="2;url=index.php">
</BODY>
</HTML> 