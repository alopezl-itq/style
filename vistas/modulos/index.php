<?php

include_once('../../modulos/controladorm.php');
session_start();
$estetica=$_SESSION['estetica'];

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->



    <head>
        <meta charset="utf-8">
        <title>The Best Hair Salons</title>
        <link rel="icon" type="img/ico" href="../../images/icoB.ico"/>
    	<meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/pestanas.css">
        <link rel="stylesheet" href="../../css/font-awesome.css">
        <link rel="stylesheet" href="../../css/animate.css">
        <link rel="stylesheet" href="../../css/templatemo_misc.css">
        <link rel="stylesheet" href="../../css/templatemo_style.css">
<?php 
echo "	<script src='js/vendor/modernizr-2.6.1-respond-1.1.0.min.js'></script>";




?>
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
                                    <h1>
                                       <a href="#">Modulos</a>
                                    </h1>
                                </div> <!-- /.logo-wrapper -->
                                <div class="col-md-10 col-sm-10 main-menu text-right">
                                    <div class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></div>
                                    <ul class="menu-first">
                                        <li class="active"><a href="../../principal.php">Inicio</a></li>
                                    
                                    <li><a class="glyphicon-book" href="../../clases/salir.php">Salir</a></li>
                                    </ul>                                    
                                </div> <!-- /.main-menu -->
                            </div> <!-- /.row -->
                        </div> <!-- /#menu-wrapper -->                        
                    </div> <!-- /.container -->
                </div> <!-- /.main-header -->
            </div> <!-- /.site-header -->
        </div> <!-- /.site-main -->

        <div class="content-section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="heading-section col-md-12 text-center">
                    </div> <!-- /.heading-section -->
                </div> <!-- /.row -->
               
<?php  
$controlador = new controlador();
$resultado = $controlador->ver();
$resultado2 = $controlador->empleado($estetica);
?>




<form method="POST" action="moduloadd.php">

<select id="empleado" name="empleado" autofocus >
    <?php
    
        while($row2 = mysqli_fetch_array($resultado2)): 
        if($row2[4]==1)
        {
        echo "<option value=$row2[0]>$row2[1] $row2[2] $row2[3]</option>";
        }
    endwhile; 
    
    
	?>
  </select>


 <?php
while($row = mysqli_fetch_array($resultado)): 
?>
<?php echo utf8_encode($row[1]); ?> <?php echo "<input type=checkbox value=$row[0] name='modulo[]' >"; ?>

        <?php  
	     endwhile; 
	    ?>     




 
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
       
    </div>
    <div class="col-lg-3 col-md-3"></div>                     

<br><INPUT TYPE="SUBMIT" name="guardar" value="Guardar" style="height:38px; width:350px" >
</form>
            </div> <!-- /.container -->
        </div> <!-- /#contact -->
         
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