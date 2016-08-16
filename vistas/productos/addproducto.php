<?php
include_once('../../modulos/controladorp.php');
$controlador = new controlador();
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    session_start();
    $marca=$_POST['marca'];
    $linea=$_POST["linea"];
    $producto=$_POST["producto"];
    $presentacion=$_POST["presentacion"];
    $costoC=$_POST["precioc"];
    $costoV=$_POST["preciov"];
    $stock=$_POST["stock"];
    $comision=$_POST["comision"];
    $r=$controlador->addProductoEmpresa($id_producto_empresa[$i],$stock[$i],$costoC[$i],$costoV[$i],$comision[$i]);
}
?>
    <meta http-equiv="refresh" content="0;url=tabla.php">