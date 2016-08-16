<?php  
include_once('../../modulos/controladorp.php');
$id_producto_empresa=$_POST["numero"];
$costoC=$_POST["costoC"];
$costoV=$_POST["costoV"];
$stock=$_POST["stock"];
$comision=$_POST["comision"];
$controlador = new Controlador();
$r=$controlador->actualizarProductoEmpresa($id_producto_empresa,$stock,$costoC,$costoV,$comision);

?>

<meta http-equiv="refresh" content="0;url=tabla.php">



