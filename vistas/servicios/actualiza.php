<?php  
include_once('../../modulos/controladors.php');
$id_servicios_empresa=$_POST["numero"];
$costo=$_POST["costo"];
$tiempo=$_POST["tiempo"];

$comison=$_POST["comision"];
$controlador = new Controlador();
$r=$controlador->actualizarServicioEmpresa($id_servicios_empresa,$costo,$tiempo,$comison);

?>

<meta http-equiv="refresh" content="0;url=tabla.php">



