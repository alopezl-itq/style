<?php
include_once('../../modulos/controladorp.php');
$controlador = new controlador();
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    session_start();
    $id_empresa=$_SESSION['estetica'];
    $marca=$_POST['marca'];
    $linea=$_POST["linea"];
    $producto=$_POST["producto"];
    $presentacion=$_POST["presentacion"];
    $costoC=$_POST["precioc"];
    $costoV=$_POST["preciov"];
    $stock=$_POST["stock"];
    $comision=$_POST["comision"];
    $r=$controlador->nuevoProductoEmpresa($producto,$linea,$marca,$presentacion,$costoC,$costoV,$stock,$comision,$id_empresa);
}
?>
<meta http-equiv="refresh" content="0;url=tabla.php">