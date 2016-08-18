<?php  
include_once('../../modulos/controladorp.php');
$id_producto_empresa=$_POST["numero"];
$stock=$_POST["stock"];
$controlador = new Controlador();
$r=$controlador->actualizarStock($id_producto_empresa,$stock);
?>

<meta http-equiv="refresh" content="0;url=inventario.php">



