<?php
include_once('../../modulos/enrutador.php');
include_once('../../modulos/c_estetica.php');

include '../../clases/comunes.php';
session_start();
?>

<!doctype html>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <title>Datos Estética</title>
    	<meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        
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
      <li class="active"><a href="../../principal.php">Inicio</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">Estéticas
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="?cargar=esteticas&controlador=crear">Registrar</a></li>
          <li><a href="#">Modificar</a></li>
          <li><a href="../../vistas/esteticas">Estéticas Registradas</a></li> 
        </ul>
      </li>
      <li><a href="../../principal.php">Regresar</a></li>
      <li><a href="../../clases/salir.php">Salir</a></li> 
    </ul>
  </div>
</nav>

		<div class="container">
                <div class="row">
                    <div class="heading-section col-md-12 text-center">
                        <p>ESTETICAS</p>
                    </div> <!-- /.heading-section -->
                </div> <!-- /.row -->
                <div class="row">
					<?php 
						 $enrutador= new Enrutador();
   						if($enrutador->validarGet(isset($_GET['cargar']))){
        					$enrutador->cargarVista($_GET['cargar'],$_GET['controlador']);    
						}
					?>﻿
				</div>
		</div> <!-- /.container -->
                   
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 hidden-xs text-right">
                        <a href="#top" id="go-top">Ir Arriba</a>
                    </div> <!-- /.text-center -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /#footer -->

  <script src="../../js/vendor/jquery-1.11.0.min.js"></script>
  <script>window.jQuery || document.write('<script src="../../js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
  <script src="../../js/bootstrap.js"></script>
  <script src="../../js/plugins.js"></script>
  <script src="../../js/main.js"></script> 
  
</body>
</html>