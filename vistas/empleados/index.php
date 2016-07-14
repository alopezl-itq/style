<?php
include_once('../../modulos/enrutador.php');
include_once('../../modulos/e_controlador.php');
include_once('../../modulos/c_estetica.php');
include '../../clases/comunes.php';
session_start();
validarSesionEnVistas();

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>The Best Hair Salons</title>
        <link rel="icon" type="img/ico" href="images/icoB.ico"/>
    	<meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		
   
	
        

        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/font-awesome.css">
        <link rel="stylesheet" href="../../css/animate.css">
        <link rel="stylesheet" href="../../css/templatemo_misc.css">
        <link rel="stylesheet" href="../../css/templatemo_style.css">
        
        <script src="js/vendor/jquery-1.11.0.min.js"></script>
    </head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
      <div class="logo-wrap col-md-2 col-sm-2 col-lg-2 col-xs-2"></div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Inicio</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Empleados
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="?cargar=empleados&controlador=crear">Nuevo Empleado</a></li>       
          <li><a href="../../vistas/empleados">Empleados Regisrados</a></li>
          <li><a href="?cargar=empleados&controlador=reactivar">Empleados Desactivados</a></li>
            <li><a href="../../vistas/servicios/Servicios.php">Servicios</a></li>
        </ul>
      </li>
      <li><a href="../empleados/index.php">Regresar</a></li>
      <li><a href="../../clases/salir.php">Salir</a></li> 
    </ul>
  </div>
</nav>
            <div class="container">
                <div class="row">
                    <div class="heading-section col-md-12 text-center">
                        <p>Empleados</p>
                    </div> <!-- /.heading-section -->
                </div> <!-- /.row -->
                <div class="row">
						<?php 
   							$enrutador= new Enrutador();
   							if($enrutador->validarGet(isset($_GET['cargar']))){
        						$enrutador->cargarVista($_GET['cargar'],$_GET['controlador']);
    						}
						?>﻿
                </div> <!-- /.row -->
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

            
                                  

  <script src="js/vendor/jquery-1.11.0.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
  <script src="js/bootstrap.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>   

<?php
echo "<script type='text/javascript' src='js/jquery.js'></script>";
echo "<script type='text/javascript' src='js/jqueryui.js'></script>";
echo "<script type='text/javascript'>";

echo "var x;";
echo "x=$(document);";
echo "x.ready(inicializar);";

echo "function inicializar()";
echo "{";
echo "	var x=$('#pestanas');";
echo "	x.tabs();";
echo "	}";
echo "</script>";
?>

    </body>
</html>