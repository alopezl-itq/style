<HTML>
<HEAD>
<TITLE>Ciudades.php</TITLE>
</HEAD>
<BODY>
<?
//Conexion con la base
include_once("conexion.php"); 
$db = new Conexion();
//Creamos la sentencia SQL y la ejecutamos
$sSQL="INSERT INTO municipios(descripcion_municipios, id_estado) VALUES ('$_POST[municipio]','$_POST[id_estado]')";
$insert = $db->insert($sSQL);
?>

<h1><div align="center">Registro Actualizado</div></h1>
<div align="center"><a href="modificar.php">Volver</a></div>

</BODY>
</HTML> 