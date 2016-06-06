<HTML>
<HEAD>
<TITLE>Empresas.php</TITLE>
</HEAD>
<BODY>
<?
//Conexion con la base
include_once("conexion.php"); 
$db = new Conexion();
//Creamos la sentencia SQL y la ejecutamos
$sSQL="INSERT INTO empresas(administrador, nombre, eslogan, imagen, cliente_a, cliente_b, cliente_c, cliente_d, id_estatus, calle, no_int, no_ext, id_estado, id_ciudad) VALUES ('$_POST[administrador]','$_POST[nombre]','$_POST[eslogan]','$_POST[imagen]','$_POST[cliente_a]','$_POST[cliente_b]','$_POST[cliente_c]','$_POST[cliente_d]','$_POST[id_estatus]','$_POST[calle]','$_POST[no_int]','$_POST[no_ext]','$_POST[id_estado]','$_POST[id_ciudad]')";

$insert = $db->insert($sSQL);
?>
<h1><div align="center">Registro Actualizado</div></h1>
<div align="center"><a href="modificar.php">Volver</a></div>
</BODY>
</HTML> 