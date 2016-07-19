<?php  
include_once('../../modulos/controladorS.php');
$id_servicios_empresa=$_POST["numero"];
$costo=$_POST["costo"];
$tiempo=$_POST["tiempo"];
$controlador = new Controlador();
$r=$controlador->actualizarServicioEmpresa($id_servicios_empresa,$costo,$tiempo);

?>

<meta http-equiv="refresh" content="0;url=tabla.php">



