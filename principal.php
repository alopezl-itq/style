<?php

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

        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
        <?php
        	echo "<script src='js/vendor/modernizr-2.6.1-respond-1.1.0.min.js'></script>";
		?>
</head>
<body>

<!--<header><a href="clases/salir.php">Logout</a></header>-->



<div class="site-main" id="sTop">
            <div class="site-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ul class="social-icons">
                                
                                <?php
	                                redes();
	                            ?>
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
                                       		<li><a href="vistas/cursos">Cursos</a></li>
                                       		<li><a href="vistas/ventas">Ventas</a></li>
                                       	
                                       <li><a href="vistas/clientes">Clientes</a></li>
                                       <li><a href="vistas/agendar">Agenda</a></li>
                                       
                                       	
                                        	<li><a href="vistas/empleados">Empleados</a></li>
                                       <li><a href="vistas/servicios/servicios.php">Servicios</a></li>
                                       <li><a href="vistas/productos/menu.php">Productos</a></li>
                                       	
                                        <li><a class="glyphicon-arrow-right" href="clases/salir.php">Salir</a></li>                               
                                    </ul>                                    
                                </div> <!-- /.main-menu -->
                            </div> <!-- /.row -->
                        </div> <!-- /#menu-wrapper -->                        
                    </div> <!-- /.container -->
                </div> <!-- /.main-header -->
            </div> <!-- /.site-header -->
             <!-- /.site-main -->
</div>

<div class="content-section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="heading-section col-md-12 text-center">
                            </center>
	                    <?php

validarSesion();


?>
                                          </div> <!-- /.col-md-12 -->
                                          
                                      
    <!--            
                
                <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-comments" data-href="https://alex.redes.sociales.facebook.com" data-width="800" data-numposts="5"></div>-->
                  
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
echo "<script src='js/vendor/jquery-1.11.0.min.js'></script>";
echo "<script>window.jQuery || document.write('<script src=\"js/vendor/jquery-1.11.0.min.js /assets/js/vendor/jquery-1.11.0.min.js\"><\/script>\')</script>";
echo "<script src='js/bootstrap.js'></script>";
echo "<script src='js/plugins.js'></script>";
echo "<script src='js/main.js'></script>";
  
echo "<script type='text/javascript' src='js/jquery.js'></script>";
echo "<script type='text/javascript' src='js/jqueryui.js'></script>";
echo "<script type='text/javascript'>";
?>

</body>

</html>
