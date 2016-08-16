<?php
include_once('../../modulos/controladorp.php');

$controlador = new controlador();
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    session_start();
$id_empresa=$_SESSION['estetica'];
    $id_producto_empresa=$_POST["numero"];
    $costoC=$_POST["costoC"];
     $costoV=$_POST["costoV"];
    $stock=$_POST["stock"];
    $comision=$_POST["comision"];
    $count=count($id_producto_empresa);
    for ($i = 0; $i < $count; $i++) 
    {
        if(isset($_POST['guardar']))
            {
             $r=$controlador->actualizarProductoEmpresa($id_producto_empresa[$i],$stock[$i],$costoC[$i],$costoV[$i],$comision[$i]);
            }
    }
}
?>
<meta http-equiv="refresh" content="0;url=tabla.php">