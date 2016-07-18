<?php  
include_once('../../modulos/controladorP.php');
$id_producto_empresa=$_POST["numero"];
$controlador = new Controlador();
$resultado = $controlador->eliminar($id_producto_empresa);
?>

<meta http-equiv="refresh" content="0;url=tabla.php">