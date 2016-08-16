<?php

include_once('../../modulos/controladors.php');

$controlador = new controlador();
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $id_servicio=utf8_decode($_POST["tipo"]);
    $costo=$_POST["costo"];
    $tiempo=$_POST["tiempo"];
<<<<<<< HEAD
    $descripcionServicios=$_POST["descripcion"];
    $comision=$_POST["comision"];
=======
    $descripcionServicios=$_POSTutf8_decode(["descripcion"]);
>>>>>>> origin/master
    session_start();
$id_empresa=$_SESSION['estetica'];

    $d=$controlador->crearDesServicio($descripcionServicios,$id_servicio);
    $r=$controlador->agregarNuevoServicioEmpresa($id_empresa,$id_servicio,$costo,$descripcionServicios,$tiempo,$comision);}
?>

<meta http-equiv="refresh" content="0;url=tabla.php">