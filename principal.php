<?php
/**
 * Created by PhpStorm.
 * User: Eed
 * Date: 19/05/2016
 * Time: 10:24 AM
 */
session_start();


echo "hola";
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

        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>

</head>
<body>

<!--<header><a href="clases/salir.php">Logout</a></header>-->



<div class="site-main" id="sTop">
            <div class="site-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ul class="social-icons">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                            </ul>
                        </div> <!-- /.col-md-12 -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
                <div class="main-header">
                    <div class="container">
                        <div id="menu-wrapper">
                            <div class="row">
                                <div class="logo-wrapper col-md-2 col-sm-2">
                                    <!--<h1>
                                       <a href="#">Flex</a>
                                    </h1>-->
                                </div> <!-- /.logo-wrapper -->
                                <div class="col-md-10 col-sm-10 main-menu text-right">
	                                
                                    <div class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></div>
                                    
                                    
                                    <ul class="menu-first">
	                                    
                                        <li class="active"><a href="#">Inicio</a></li>
                                       <li><a href="vistas/usuarios">Usuarios</a></li>
                                       <li><a href="vistas/esteticas">Estéticas</a></li>
                                       <?php menu();?>
                                        <!--<li><a href="#">¿Quienes Somos?</a></li>-->
                                        <li><a class="glyphicon-arrow-right" href="clases/salir.php">Salir</a></li>                               
                                    </ul>                                    
                                </div> <!-- /.main-menu -->
                            </div> <!-- /.row -->
                        </div> <!-- /#menu-wrapper -->                        
                    </div> <!-- /.container -->
                </div> <!-- /.main-header -->
            </div> <!-- /.site-header -->
             <!-- /.site-main -->


<div class="content-section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="heading-section col-md-12 text-center">
                            </center>
	                    <?php

validarSesion();
//echo $_SESSION['nombre'];

?>
                                          </div> <!-- /.col-md-12 -->
                </div> 



            
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12 text-left">
                        <span>Copyright &copy; 2016 Style Co. 
                        
                        | Design: <a rel="nofollow" href="http://www.alejandrolopezlopez.com"
                         target="_target">QroSol</a>

                        </span>
                  </div> <!-- /.text-center -->
                    <div class="col-md-4 hidden-xs text-right">
                        <a href="#top" id="go-top">Back to top</a>
                    </div> <!-- /.text-center -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /#footer -->
        
        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/bootstrap.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        


</body>

</html>
