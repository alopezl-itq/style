<?php
/**
 * Created by PhpStorm.
 * User: Eed
 * Date: 21/06/2016
 * Time: 09:23 AM
 */
 include_once('../../clases/comunes.php');
 include_once('../../modulos/enrutador.php');
 include_once('../../modulos/controlador.php');
include_once('../../modulos/controlador_cl.php');
session_start();

?>

<head>
    <meta charset="utf-8">
    <title>Style....</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!--
    Flex Template
    http://www.templatemo.com/tm-406-flex
    -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/font-awesome.css">
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="../../css/templatemo_misc.css">
    <link rel="stylesheet" href="../../css/templatemo_style.css">

</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="logo-wrap col-md-2 col-sm-2 col-lg-2 col-xs-2"></div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Inicio</a></li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Mi Perfil
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="?cargar=clientes&controlador=ver">Ver Mi Perfil</a></li>
                    <li><a href="?cargar=clientes&controlador=editar">Modificar Mi Perfil</a></li>

        </ul>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Historial
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="?cargar=clientes&controlador=historial_productos">Productos</a></li>
                    <li><a href="?cargar=clientes&controlador=historial_servicios">Servicios</a></li>

                </ul>
            <li><a href="../../clases/salir.php">Salir</a></li>

    </div>

</nav>


<div class="content-section" id="contact">
    <div class="container">
        <div class="row">
            <div class="heading-section col-md-12" style="font-size:xx-large; text-align:center">

                <?php
                validarSesionEnVistas();

                $enrutador= new Enrutador();
                if($enrutador->validarGet(isset($_GET['cargar']))){
                    $enrutador->cargarVista($_GET['cargar'],$_GET['controlador']);
                }
                ?>
            </div> <!-- /.col-md-12 -->
        </div>
    <script src="../../js/vendor/jquery-1.11.0.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="../../js/bootstrap.js"></script>
    <script src="../../js/plugins.js"></script>
    <script src="../../js/main.js"></script>

<script type='text/javascript' src='jquery.js'></script>
<script type='text/javascript' src='jqueryui.js'></script>

</body>

</html>