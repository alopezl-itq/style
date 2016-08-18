<?php
include_once('../../modulos/controladors.php');

$controlador = new controlador();
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    session_start();
$id_empresa=$_SESSION['estetica'];
    
    $id_servicios_empresa=$_POST["numero"];
    $costo=$_POST["costo"];
    $tiempo=$_POST["tiempo"];
    $comision=$_POST["comision"];
    $count=count($id_servicios_empresa);
    for ($i = 0; $i < $count; $i++) 
    {
        if(isset($_POST['guardar']))
            {
                $r=$controlador->actualizarServicioEmpresa($id_servicios_empresa[$i],$costo[$i],$tiempo[$i],$comision[$i]);
            }
    }
}
?>


<meta http-equiv="refresh" content="0;url=tabla.php">