<?php

include_once('../../modulos/controladorP.php');
$id_empresa=2;
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
                                       <a href="#">Servicios</a>
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
$resultado = $controlador->verproductos(1);
$resultado2 = $controlador->verproductos(2);
$resultado3 = $controlador->verproductos(3);
$resultado4 = $controlador->verproductos(4);
$resultado5 = $controlador->verproductos(5);
$resultado6= $controlador->verproductos(6);
$resultado7 = $controlador->verproductos(7);
$resultado8 = $controlador->verproductos(8);
$resultado9 = $controlador->verproductos(9);
$resultado10 = $controlador->verproductos(10);
$resultado11= $controlador->verproductos(11);
$resultado12 = $controlador->verproductos(12);
$resultado13 = $controlador->verproductos(13);

?>

<script  src="/../../js/jquery.js"></script>
<div id="pestanas"> 
 <ul class="nav nav-tabs">
        <li role="presentation" class="active" ><a href="#pestana1" role="tab" data-toggle="tab">Oro fluido Revlon</a></li>
        <li role="presentation"><a href="#pestana2" role="tab" data-toggle="tab">Revlon Profesional</a></li> 
        <li role="presentation"><a href="#pestana3" role="tab" data-toggle="tab">American Crew</a></li> 
        <li role="presentation"><a href="#pestana4" role="tab" data-toggle="tab">Wella</a></li> 
        <li role="presentation"><a href="#pestana5" role="tab" data-toggle="tab">Wella Color </a></li> 
        <li role="presentation"><a href="#pestana6" role="tab" data-toggle="tab">Wella C&S</a></li> 
        <li role="presentation"><a href="#pestana7" role="tab" data-toggle="tab">System Professional </a></li> 
        <li role="presentation"><a href="#pestana8" role="tab" data-toggle="tab">Loreal </a></li> 
        <li role="presentation"><a href="#pestana9" role="tab" data-toggle="tab">Redken </a></li> 
        <li role="presentation"><a href="#pestana10" role="tab" data-toggle="tab">Inebrya </a></li> 
        <li role="presentation"><a href="#pestana11" role="tab" data-toggle="tab">Alfaparf Milano  </a></li> 
        <li role="presentation"><a href="#pestana12" role="tab" data-toggle="tab">Sebastian Profesional  </a></li> 
        <li role="presentation"><a href="#pestana13" role="tab" data-toggle="tab">Goldwell </a></li> 
 </ul>

<div id="pestana1">
<b>Servicio cortes:</b><br><br>
<form method="POST" action="aServicio.php">
<table border="0">
	<thead>
        <th>Servicio</th>
		<th>Seleccion</th>

     </thead>
     <!-- Cortes -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

        <?php
	     while($row = mysqli_fetch_array($resultado)): 
         ?>
            <tr>
            <td><?php echo utf8_encode($row[1]); ?></td>
            <?
            echo "<td><input type=checkbox value=$row[0] name='corte[]' ></td>";
            ?>
         </tr>
        <?php  
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
</div>

<!--///////////////////////-->

<div id="pestana2">
<br><b>Servicio Color:</b><br><br>
<table border="0">
	<thead>
        <th>Servicio</th>
		<th>Seleccion</th>

     </thead>
     <!-- Color -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysqli_fetch_array($resultado2)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[3]); ?></td>
             <?
            echo "<td><input type=checkbox value=$row[0] name='color[]' ></td>";
            ?>
            </tr>
        <?php  
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
</div>

<!--///////////////////////-->

<div id="pestana3">
<br><b>Servicio Peinado:</b><br><br>
<table border="0">
	<thead>
        <th>Servicio</th>
		<th>Seleccion</th>

     </thead>
     <!-- Peinado -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysqli_fetch_array($resultado3)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[3]); ?></td>
             <?
            echo "<td><input type=checkbox value=$row[0] name='peinado[]' ></td>";
            ?>
          </tr>
        <?php  
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
</div>

<!--///////////////////////-->

<div id="pestana4">
<br><b>Servicio Maquillaje:</b><br><br>
<table border="0">
	<thead>
        <th>Servicio</th>
		<th>Seleccion</th>

     </thead>
     <!-- Maquillaje -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysqli_fetch_array($resultado4)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[3]); ?></td>
             <?
            echo "<td><input type=checkbox value=$row[0] name='maquillaje[]' ></td>";
            ?>
        </tr>
        <?php  
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
</div>
<!--///////////////////////-->

<div id="pestana5">
<br><b>Servicio Maquillaje:</b><br><br>
<table border="0">
	<thead>
        <th>Servicio</th>
		<th>Seleccion</th>

     </thead>
     <!-- Maquillaje -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysqli_fetch_array($resultado5)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[3]); ?></td>
             <?
            echo "<td><input type=checkbox value=$row[0] name='maquillaje[]' ></td>";
            ?>
        </tr>
        <?php  
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
</div>
<!--///////////////////////-->

<div id="pestana6">
<br><b>Servicio Maquillaje:</b><br><br>
<table border="0">
	<thead>
        <th>Servicio</th>
		<th>Seleccion</th>

     </thead>
     <!-- Maquillaje -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysqli_fetch_array($resultado6)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[3]); ?></td>
             <?
            echo "<td><input type=checkbox value=$row[0] name='maquillaje[]' ></td>";
            ?>
        </tr>
        <?php  
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
</div>
<!--///////////////////////-->

<div id="pestana7">
<br><b>Servicio Maquillaje:</b><br><br>
<table border="0">
	<thead>
        <th>Servicio</th>
		<th>Seleccion</th>

     </thead>
     <!-- Maquillaje -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysqli_fetch_array($resultado7)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[3]); ?></td>
             <?
            echo "<td><input type=checkbox value=$row[0] name='maquillaje[]' ></td>";
            ?>
        </tr>
        <?php  
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
</div>
<!--///////////////////////-->

<div id="pestana8">
<br><b>Servicio Maquillaje:</b><br><br>
<table border="0">
	<thead>
        <th>Servicio</th>
		<th>Seleccion</th>

     </thead>
     <!-- Maquillaje -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysqli_fetch_array($resultado8)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[3]); ?></td>
             <?
            echo "<td><input type=checkbox value=$row[0] name='maquillaje[]' ></td>";
            ?>
        </tr>
        <?php  
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
</div>
<!--///////////////////////-->

<div id="pestana9">
<br><b>Servicio Maquillaje:</b><br><br>
<table border="0">
	<thead>
        <th>Servicio</th>
		<th>Seleccion</th>

     </thead>
     <!-- Maquillaje -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysqli_fetch_array($resultado9)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[3]); ?></td>
             <?
            echo "<td><input type=checkbox value=$row[0] name='maquillaje[]' ></td>";
            ?>
        </tr>
        <?php  
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
</div>
<!--///////////////////////-->

<div id="pestana10">
<br><b>Servicio Maquillaje:</b><br><br>
<table border="0">
	<thead>
        <th>Servicio</th>
		<th>Seleccion</th>

     </thead>
     <!-- Maquillaje -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysqli_fetch_array($resultado10)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[3]); ?></td>
             <?
            echo "<td><input type=checkbox value=$row[0] name='maquillaje[]' ></td>";
            ?>
        </tr>
        <?php  
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
</div>
<!--///////////////////////-->

<div id="pestana11">
<br><b>Servicio Maquillaje:</b><br><br>
<table border="0">
	<thead>
        <th>Servicio</th>
		<th>Seleccion</th>

     </thead>
     <!-- Maquillaje -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysqli_fetch_array($resultado11)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[3]); ?></td>
             <?
            echo "<td><input type=checkbox value=$row[0] name='maquillaje[]' ></td>";
            ?>
        </tr>
        <?php  
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
</div>
<!--///////////////////////-->

<div id="pestana12">
<br><b>Servicio Maquillaje:</b><br><br>
<table border="0">
	<thead>
        <th>Servicio</th>
		<th>Seleccion</th>

     </thead>
     <!-- Maquillaje -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysqli_fetch_array($resultado12)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[3]); ?></td>
             <?
            echo "<td><input type=checkbox value=$row[0] name='maquillaje[]' ></td>";
            ?>
        </tr>
        <?php  
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
</div>

<!--///////////////////////-->

<div id="pestana13">
<br><b>Servicios Otros:</b><br><br>
<table border="0">
	<thead>
        <th>Servicio</th>
		<th>Seleccion</th>

     </thead>
     <!-- Otros servicios -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysqli_fetch_array($resultado13)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[3]); ?></td>
             <?
            echo "<td><input type=checkbox value=$row[0] name='otro[]' ></td>";
            ?>
         </tr>
        <?php  
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
<?
echo "<INPUT TYPE='HIDDEN' VALUE='$id_empresa' name='id_empresa'>";
?>
<br><INPUT TYPE="SUBMIT" name="guardar" value="Guardar" style="height:38px; width:350px" >
</form>
</div>
</div>

              
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