<?php


include 'clases/comunes.php';
session_start();




?>


<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
<head><title>Style Co.</title>
	
 <meta charset="utf-8">
        <title>The Best Hair Salons</title>
        <link rel="icon" type="img/ico" href="images/icoB.ico"/>
    	<meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/templatemo_misc.css">
        <link rel="stylesheet" href="css/templatemo_style.css">

        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>	
	
	
	
	
</head>

<body>
	  
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
                                        <li class="active"><a href="#">Inicio</a></li>                                        <li><a href="#acceso">Login</a></li>                                										<li><a href=""  data-toggle="modal" data-target="#myModal">Registrarse</a></li>
                                        <li><a href=""  data-toggle="modal" data-target="#myModalAsistencia">Asistencia</a></li>
                                        <li><a href=""  data-toggle="modal" data-target="#myModalSalida">Salida</a></li>
                                    </ul>                                    
                                </div> <!-- /.main-menu -->
                            </div> <!-- /.row -->
                        </div> <!-- /#menu-wrapper -->                        
                    </div> <!-- /.container -->
                </div> <!-- /.main-header -->
            </div> <!-- /.site-header -->
            <div class="site-slider">
                <div class="slider">
                    <div class="flexslider">
	                    
                        <ul class="slides">
	                        
                           <?php
	                           cursos_banner();
	                          ?>
                        </ul>
                    </div> <!-- /.flexslider -->
                </div> <!-- /.slider -->
            </div> <!-- /.site-slider -->
        </div> <!-- /.site-main -->


<!-- Lugar para Galeria, ETC:J:O:E-->
			<div class="content-section" id="acceso">
				<div class="container">
                    <div class="row" align="center">
                    	<div class="col-lg-3"></div>
                        <div class="heading-section col-lg-6">
                        	<div align="center">
                            	<h2>LOGIN</h2>
                            	<p>INICIO DE SESIÓN</p><br>
                            </div>
                        	<div class="contact-form">
                            	<form action="indexb.php?modo=login" method="post">
									<i>Usuario:</i><br> <input type="text" name="usuario"><br>
									<i>Password:</i><br> <input type="password" name="password"><br>
									<input type="hidden" name="login" value="1">
									<input type="submit" value="Iniciar Sesión">
    							</form>
                        	</div> 
                    	</div>
                        <div class="col-lg-3"></div>
                 	</div>
               	</div>
            </div>
                
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

    <!-- Modal -->
    <form action="index.php?modo=registro" method="post">
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Registro</h4>
                </div>
                <div class="modal-body">
                    <iframe src="registro.php" style="width: 100% !important; height: 250px !important"></iframe>
                </div>


            </div>

        </div>
    </div>
    </form>
    <!-- Modal Asistencia-->
	<form action="index.php?modo=registro" method="post">
    <div class="modal fade" id="myModalAsistencia" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Asistencia</h4>
                </div>
                <div class="modal-body">
                    <iframe src="asistencia.php" style="width: 100% !important; height:250px !important"></iframe>
                </div>
                <div id="texto">
	                
                </div>


            </div>

        </div>
    </div>
    </form>

	 <!-- Modal Salida-->
	<form action="index.php?modo=registro" method="post">
    <div class="modal fade" id="myModalSalida" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Salida</h4>
                </div>
                <div class="modal-body">
                    <iframe src="salida.php" style="width: 100% !important; height:250px !important"></iframe>
                </div>


            </div>

        </div>
    </div>
    </form>




    <script src="../../js/vendor/jquery-1.11.0.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="../../js/bootstrap.js"></script>
    <script src="../../js/plugins.js"></script>
    <script src="../../js/main.js"></script>
</body>

</html>