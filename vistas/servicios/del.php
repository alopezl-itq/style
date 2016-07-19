<?php  
include_once('../../modulos/controladorS.php');
$id_servicios_empresa=$_POST["numero"];
$controlador = new Controlador();
$resultado = $controlador->eliminar($id_servicios_empresa);
?>

<meta http-equiv="refresh" content="0;url=tabla.php">