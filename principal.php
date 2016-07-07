<?php
/**
 * Created by PhpStorm.
 * User: Eed
 * Date: 19/05/2016
 * Time: 10:24 AM
 */
session_start();



include_once('clases/comunes.php');

//validarSesion();

?>
<html>
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
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/templatemo_misc.css">
        <link rel="stylesheet" href="css/templatemo_style.css">

</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
      <div class="logo-wrap col-md-2 col-sm-2 col-lg-2 col-xs-2"></div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../../principal.php">Inicio</a></li>
      <li><a href="vistas/esteticas">Estéticas</a></li>
      <li><a href="vistas/usuarios">Usuarios</a></li>
      <li><a href="clases/salir.php">Salir</a></li> 
    </ul>
  </div>
</nav>


<div class="content-section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="heading-section col-md-12" style="font-size:xx-large; text-align:center">
                            </center>
	                    <?php

validarSesion();
//echo $_SESSION['nombre'];

?>
                                          </div> <!-- /.col-md-12 -->
                </div> 

</body>

</html>

