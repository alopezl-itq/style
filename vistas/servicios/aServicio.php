<?php

include_once('../../modulos/controladors.php');

session_start();
$id_empresa=$_SESSION['estetica'];

$controlador = new controlador();

if ($_SERVER["REQUEST_METHOD"] == "POST") {  


$corte=isset($_POST['corte']) ? $_POST['corte'] : NULL;
$color=isset($_POST['color']) ? $_POST['color'] : NULL;
$peinado=isset($_POST['peinado']) ? $_POST['peinado'] : NULL;
$maquillaje=isset($_POST['maquillaje']) ? $_POST['maquillaje'] : NULL;
$otro=isset($_POST['otro']) ? $_POST['otro'] : NULL;

 //   $corte=$_POST["corte"];
   // $color=$_POST["color"];
   // $peinado=$_POST["peinado"];
   // $maquillaje=$_POST["maquillaje"];
   // $otro=$_POST["otro"];
    
    $count=count($corte);
    $count2=count($color);
    $count3=count($peinado);
    $count4=count($maquillaje);
    $count5=count($otro);
    for ($i = 0; $i < $count; $i++) 
    {
        if(isset($_POST['guardar']))
            {
                if($corte!=null){
                $r=$controlador->agregarServicioEmpresa($id_empresa, 1,0,$corte[$i],0);
                }
            }

    }
    for ($i = 0; $i < $count2; $i++) 
    {
        if(isset($_POST['guardar']))
            {
                if($corte!=null){
                $r=$controlador->agregarServicioEmpresa($id_empresa, 2,0,$color[$i],0);
                }
            }

    }
    for ($i = 0; $i < $count3; $i++) 
    {
        if(isset($_POST['guardar']))
            {
                if($color!=null){
                $r=$controlador->agregarServicioEmpresa($id_empresa, 3,0,$peinado[$i],0);
                }
            }

    }
    for ($i = 0; $i < $count4; $i++) 
    {
        if(isset($_POST['guardar']))
            {
                if($maquillaje!=null){
                $r=$controlador->agregarServicioEmpresa($id_empresa, 4,0,$maquillaje[$i],0);
                }
            }

    }
    for ($i = 0; $i < $count5; $i++) 
    {
        if(isset($_POST['guardar']))
            {
                if($otro!=null){
                $r=$controlador->agregarServicioEmpresa($id_empresa, 5,0,$otro[$i],0);
                }
            }

    }
}


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
                                        <li><a href="?cargar=usuarios&controlador=crear"><b>Registrar</b></a></li>
                                    
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
                <div class="row">
						<?php  
$controlador = new Controlador();
$resultado = $controlador->verServiciosEmpresa(1,$id_empresa);
$resultado2 = $controlador->verServiciosEmpresa(2,$id_empresa);
$resultado3 = $controlador->verServiciosEmpresa(3,$id_empresa);
$resultado4 = $controlador->verServiciosEmpresa(4,$id_empresa);
$resultado5 = $controlador->verServiciosEmpresa(5,$id_empresa);
?>


<script  src="js/jquery.js"></script>
<div id="pestanas"> 
 <ul class="nav nav-tabs">
        <li role="presentation" class="active" ><a href="#pestana1" role="tab" data-toggle="tab">Cortes</a></li>
        <li role="presentation"><a href="#pestana2" role="tab" data-toggle="tab">Color</a></li> 
        <li role="presentation"><a href="#pestana3" role="tab" data-toggle="tab">Peinado</a></li> 
        <li role="presentation"><a href="#pestana4" role="tab" data-toggle="tab">Maquillaje</a></li> 
        <li role="presentation"><a href="#pestana5" role="tab" data-toggle="tab">Otros servicios</a></li> 
 </ul>

<div id="pestana1">
<b>Servicio cortes:</b><br><br>
<form method="POST" action="fservicios.php">
<table border="2">
	<thead>
        <th>Servicio</th>
        <th>Costo</th>
        <th>Tiempo</th>
     </thead>
     <!-- Cortes -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysqli_fetch_array($resultado)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[0]); ?></td>
            <td> <input type="text" name='costo[]' style="height:30px; width:100px;" required></td>
            <td><select name='tiempo[]'><option value=30>30 min</option><option value=60>1 hora</option><option value=90 >1 hora y 30 minutos</option><option value=120 >2 horas</option></select></td>

        </tr>
<?php 
       echo "<input type='hidden' name='numero[]' value=$row[1]>";
         
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
</div>

<!--///////////////////////-->

<div id="pestana2">
<br><b>Servicio Color:</b><br><br>
<table border="2">
	<thead>
        <th>Servicio</th>
        <th>Costo</th>
        <th>Tiempo</th>
     </thead>
     <!-- Color -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysqli_fetch_array($resultado2)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[0]); ?></td>
            <td> <input type="text" name='costo[]' style="height:20px; width:100px;" required></td>
            <td><select name='tiempo[]'><option value=30>30 min</option><option value=60>1 hora</option><option value=90 >1 hora y 30 minutos</option><option value=120 >2 horas</option></select></td>
        </tr>
        <?php  
        echo "<input type='hidden' name='numero[]' value=$row[1]>";
        
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
</div>

<!--///////////////////////-->

<div id="pestana3">
<br><b>Servicio Peinado:</b><br><br>
<table border="2">
	<thead>
        <th>Servicio</th>
        <th>Costo</th>
        <th>Tiempo</th>
     </thead>
     <!-- Peinado -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysqli_fetch_array($resultado3)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[0]); ?></td>
            <td> <input type="text" name='costo[]' style="height:20px; width:100px;" required></td>
            <td><select name='tiempo[]'><option value=30>30 min</option><option value=60>1 hora</option><option value=90 >1 hora y 30 minutos</option><option value=120 >2 horas</option></select></td>
        </tr>
        <?php  
        echo "<input type='hidden' name='numero[]' value=$row[1]>";
        
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
</div>

<!--///////////////////////-->

<div id="pestana4">
<br><b>Servicio Maquillaje:</b><br><br>
<table border="2">
	<thead>
        <th>Servicio</th>
        <th>Costo</th>
        <th>Tiempo</th>
     </thead>
     <!-- Maquillaje -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysqli_fetch_array($resultado4)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[0]); ?></td>
            <td> <input type="text" name='costo[]' style="height:20px; width:100px;" required></td>
            <td><select name='tiempo[]'><option value=30>30 min</option><option value=60>1 hora</option><option value=90 >1 hora y 30 minutos</option><option value=120 >2 horas</option></select></td>
        </tr>
        <?php  
        echo "<input type='hidden' name='numero[]' value=$row[1]>";
        
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
</div>

<!--///////////////////////-->

<div id="pestana5">
<br><b>Servicios Otros:</b><br><br>
<table border="2">
	<thead>
        <th>Servicio</th>
        <th>Costo</th>
        <th>Tiempo</th>
     </thead>
     <!-- Cortes -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysqli_fetch_array($resultado5)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[0]); ?></td>
            <td> <input type="text" name='costo[]' style="height:20px; width:100px;" required></td>
            <td><select name='tiempo[]'><option value=30>30 min</option><option value=60>1 hora</option><option value=90 >1 hora y 30 minutos</option><option value=120 >2 horas</option></select></td>
        </tr>
        <?php
        echo "<input type='hidden' name='numero[]' value=$row[1]>";
          
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
<br><INPUT TYPE="SUBMIT" name="guardar" value="Guardar" style="height:38px; width:350px" >
</form>
</div>


</div>
                </div> <!-- /.row -->
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
<?php

?>

    </body>
</html>