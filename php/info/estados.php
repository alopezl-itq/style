<HTML>
<HEAD>
<TITLE>Sexo.php</TITLE>
</HEAD>
<BODY>
<?
//Conexion con la base

include_once("../../clases/conexion.php"); 
$db = new Conexion();
//Creamos la sentencia SQL y la ejecutamos
$sSQL="Update Estados Set descripcion_estados='$_POST[descripcion]' Where id_estado='$_POST[id_estado]'";
$update = $db->update($sSQL);
?>

<h1><div align="center">Registro Actualizado</div></h1>
<meta http-equiv="refresh" content="2;url=index.php">
</BODY>
</HTML> 