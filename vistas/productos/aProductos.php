<?php

include_once('../../modulos/controladorP.php');

$id_empresa=$_POST["id_empresa"];

$controlador = new controlador();
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $p1=$_POST["p1"];
    $p2=$_POST["p2"];
    $p3=$_POST["p3"];
    $p4=$_POST["p4"];
    $p5=$_POST["p5"];
    $p6=$_POST["p6"];
    $p7=$_POST["p7"];
    $p8=$_POST["p8"];
    $p9=$_POST["p9"];
    $p10=$_POST["p10"];
    $p11=$_POST["p11"];
    $p12=$_POST["p12"];
    $p13=$_POST["p13"];
    
    $count1=count($p1);
    $count2=count($p2);
    $count3=count($p3);
    $count4=count($p4);
    $count5=count($p5);
    $count6=count($p6);
    $count7=count($p7);
    $count8=count($p8);
    $count9=count($p9);
    $count10=count($p10);
    $count11=count($p11);
    $count12=count($p12);
    $count13=count($p13);
    for ($i = 0; $i < $count1; $i++) 
    {
        if(isset($_POST['guardar']))
            {
                $r=$controlador->agregarProductoEmpresa($id_empresa, 1,0,$p1[$i],0);
            }

    }
    for ($i = 0; $i < $count2; $i++) 
    {
        if(isset($_POST['guardar']))
            {
                $r=$controlador->agregarProductoEmpresa($id_empresa,$p2[$i]);
            }

    }
    for ($i = 0; $i < $count3; $i++) 
    {
        if(isset($_POST['guardar']))
            {
                $r=$controlador->agregarProductoEmpresa($id_empresa,$p3[$i]);
            }

    }
    for ($i = 0; $i < $count4; $i++) 
    {
        if(isset($_POST['guardar']))
            {
                $r=$controlador->agregarProductoEmpresa($id_empresa,$p4[$i]);
            }

    }
    for ($i = 0; $i < $count5; $i++) 
    {
        if(isset($_POST['guardar']))
            {
                $r=$controlador->agregarProductoEmpresa($id_empresa,$p5[$i]);
            }

    }
    for ($i = 0; $i < $count6; $i++) 
    {
        if(isset($_POST['guardar']))
            {
                $r=$controlador->agregarProductoEmpresa($id_empresa,$p6[$i]);
            }

    }
    for ($i = 0; $i < $count7; $i++) 
    {
        if(isset($_POST['guardar']))
            {
                $r=$controlador->agregarProductoEmpresa($id_empresa,$p7[$i]);
            }

    }
    for ($i = 0; $i < $count8; $i++) 
    {
        if(isset($_POST['guardar']))
            {
                $r=$controlador->agregarProductoEmpresa($id_empresa,$p8[$i]);
            }

    }
    for ($i = 0; $i < $count9; $i++) 
    {
        if(isset($_POST['guardar']))
            {
                $r=$controlador->agregarProductoEmpresa($id_empresa,$p9[$i]);
            }

    }
    for ($i = 0; $i < $count10; $i++) 
    {
        if(isset($_POST['guardar']))
            {
                $r=$controlador->agregarProductoEmpresa($id_empresa,$p10[$i]);
            }

    }
    for ($i = 0; $i < $count11; $i++) 
    {
        if(isset($_POST['guardar']))
            {
                $r=$controlador->agregarProductoEmpresa($id_empresa,$p11[$i]);
            }

    }
    for ($i = 0; $i < $count12; $i++) 
    {
        if(isset($_POST['guardar']))
            {
                $r=$controlador->agregarProductoEmpresa($id_empresa,$p12[$i]);
            }

    }
    for ($i = 0; $i < $count13; $i++) 
    {
        if(isset($_POST['guardar']))
            {
                $r=$controlador->agregarProductoEmpresa($id_empresa,$p13[$i]);
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
                                       <a href="#">Productos</a>
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
                <div class="row">
						<?php  
$controlador = new Controlador();
$resultado = $controlador->verProductosEmpresa(1,$id_empresa);
$resultado2 = $controlador->verProductosEmpresa(2,$id_empresa);
$resultado3 = $controlador->verProductosEmpresa(3,$id_empresa);
$resultado4 = $controlador->verProductosEmpresa(4,$id_empresa);
$resultado5 = $controlador->verProductosEmpresa(5,$id_empresa);
$resultado6 = $controlador->verProductosEmpresa(6,$id_empresa);
$resultado7 = $controlador->verProductosEmpresa(7,$id_empresa);
$resultado8 = $controlador->verProductosEmpresa(8,$id_empresa);
$resultado9 = $controlador->verProductosEmpresa(9,$id_empresa);
$resultado10 = $controlador->verProductosEmpresa(10,$id_empresa);
$resultado11 = $controlador->verProductosEmpresa(11,$id_empresa);
$resultado12 = $controlador->verProductosEmpresa(12,$id_empresa);
$resultado13 = $controlador->verProductosEmpresa(13,$id_empresa);
?>


<script  src="js/jquery.js"></script>
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
<form method="POST" action="fProductos.php">
<table border="2">
	<thead>
        <th>Producto</th>
        <th>Costo de Compra</th>
        <th>Costo de Venta</th>
        <th>Stock</th>
     </thead>
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysqli_fetch_array($resultado)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[1]); ?></td>
            <td> <input type="text" name='costoC[]' style="height:25px; width:100px;" required></td>
            <td> <input type="text" name='costoV[]' style="height:25px; width:100px;" required></td>
            <td> <input type="text" name='stock[]' style="height:25px; width:100px;" required></td>
           
        </tr>
<?php 
       echo "<input type='hidden' name='numero[]' value=$row[0]>";
         
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
        <th>Producto</th>
        <th>Costo de Compra</th>
        <th>Costo de Venta</th>
        <th>Stock</th>
     </thead>
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysqli_fetch_array($resultado2)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[1]); ?></td>
            <td> <input type="text" name='costoC[]' style="height:25px; width:100px;" required></td>
            <td> <input type="text" name='costoV[]' style="height:25px; width:100px;" required></td>
            <td> <input type="text" name='stock[]' style="height:25px; width:100px;" required></td>
           
        </tr>
<?php 
       echo "<input type='hidden' name='numero[]' value=$row[0]>";
        
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
        <th>Producto</th>
        <th>Costo de Compra</th>
        <th>Costo de Venta</th>
        <th>Stock</th>
     </thead>
     <!-- Peinado -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysqli_fetch_array($resultado3)): 
         ?>
        <tr>
           <td><?php echo utf8_encode($row[1]); ?></td>
            <td> <input type="text" name='costoC[]' style="height:25px; width:100px;" required></td>
            <td> <input type="text" name='costoV[]' style="height:25px; width:100px;" required></td>
            <td> <input type="text" name='stock[]' style="height:25px; width:100px;" required></td>
           
        </tr>
<?php 
       echo "<input type='hidden' name='numero[]' value=$row[0]>";
        
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
        <th>Producto</th>
        <th>Costo de Compra</th>
        <th>Costo de Venta</th>
        <th>Stock</th>
     </thead>
     <!-- Maquillaje -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysqli_fetch_array($resultado4)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[1]); ?></td>
            <td> <input type="text" name='costoC[]' style="height:25px; width:100px;" required></td>
            <td> <input type="text" name='costoV[]' style="height:25px; width:100px;" required></td>
            <td> <input type="text" name='stock[]' style="height:25px; width:100px;" required></td>
           
        </tr>
<?php 
       echo "<input type='hidden' name='numero[]' value=$row[0]>";
        
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
</div>

<!--///////////////////////-->
<div id="pestana5">
<br><b>Servicio Maquillaje:</b><br><br>
<table border="2">
	<thead>
        <th>Producto</th>
        <th>Costo de Compra</th>
        <th>Costo de Venta</th>
        <th>Stock</th>
     </thead>
     <!-- Maquillaje -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysqli_fetch_array($resultado5)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[1]); ?></td>
            <td> <input type="text" name='costoC[]' style="height:25px; width:100px;" required></td>
            <td> <input type="text" name='costoV[]' style="height:25px; width:100px;" required></td>
            <td> <input type="text" name='stock[]' style="height:25px; width:100px;" required></td>
           
        </tr>
<?php 
       echo "<input type='hidden' name='numero[]' value=$row[0]>";
        
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
</div>

<!--///////////////////////-->
<div id="pestana6">
<br><b>Servicio Maquillaje:</b><br><br>
<table border="2">
	<thead>
        <th>Producto</th>
        <th>Costo de Compra</th>
        <th>Costo de Venta</th>
        <th>Stock</th>
     </thead>
     <!-- Maquillaje -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysqli_fetch_array($resultado6)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[1]); ?></td>
            <td> <input type="text" name='costoC[]' style="height:25px; width:100px;" required></td>
            <td> <input type="text" name='costoV[]' style="height:25px; width:100px;" required></td>
            <td> <input type="text" name='stock[]' style="height:25px; width:100px;" required></td>
           
        </tr>
<?php 
       echo "<input type='hidden' name='numero[]' value=$row[0]>";
        
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
</div>

<!--///////////////////////-->
<div id="pestana7">
<br><b>Servicio Maquillaje:</b><br><br>
<table border="2">
	<thead>
        <th>Producto</th>
        <th>Costo de Compra</th>
        <th>Costo de Venta</th>
        <th>Stock</th>
     </thead>
     <!-- Maquillaje -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysqli_fetch_array($resultado7)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[1]); ?></td>
            <td> <input type="text" name='costoC[]' style="height:25px; width:100px;" required></td>
            <td> <input type="text" name='costoV[]' style="height:25px; width:100px;" required></td>
            <td> <input type="text" name='stock[]' style="height:25px; width:100px;" required></td>
           
        </tr>
<?php 
       echo "<input type='hidden' name='numero[]' value=$row[0]>";
        
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
</div>

<!--///////////////////////-->
<div id="pestana8">
<br><b>Servicio Maquillaje:</b><br><br>
<table border="2">
	<thead>
        <th>Producto</th>
        <th>Costo de Compra</th>
        <th>Costo de Venta</th>
        <th>Stock</th>
     </thead>
     <!-- Maquillaje -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysqli_fetch_array($resultado8)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[1]); ?></td>
            <td> <input type="text" name='costoC[]' style="height:25px; width:100px;" required></td>
            <td> <input type="text" name='costoV[]' style="height:25px; width:100px;" required></td>
            <td> <input type="text" name='stock[]' style="height:25px; width:100px;" required></td>
           
        </tr>
<?php 
       echo "<input type='hidden' name='numero[]' value=$row[0]>";
        
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
</div>

<!--///////////////////////-->
<div id="pestana9">
<br><b>Servicio Maquillaje:</b><br><br>
<table border="2">
	<thead>
        <th>Producto</th>
        <th>Costo de Compra</th>
        <th>Costo de Venta</th>
        <th>Stock</th>
     </thead>
     <!-- Maquillaje -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysqli_fetch_array($resultado9)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[1]); ?></td>
            <td> <input type="text" name='costoC[]' style="height:25px; width:100px;" required></td>
            <td> <input type="text" name='costoV[]' style="height:25px; width:100px;" required></td>
            <td> <input type="text" name='stock[]' style="height:25px; width:100px;" required></td>
           
        </tr>
<?php 
       echo "<input type='hidden' name='numero[]' value=$row[0]>";
        
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
</div>

<!--///////////////////////-->
<div id="pestana10">
<br><b>Servicio Maquillaje:</b><br><br>
<table border="2">
	<thead>
        <th>Producto</th>
        <th>Costo de Compra</th>
        <th>Costo de Venta</th>
        <th>Stock</th>
     </thead>
     <!-- Maquillaje -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysqli_fetch_array($resultado10)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[1]); ?></td>
            <td> <input type="text" name='costoC[]' style="height:25px; width:100px;" required></td>
            <td> <input type="text" name='costoV[]' style="height:25px; width:100px;" required></td>
            <td> <input type="text" name='stock[]' style="height:25px; width:100px;" required></td>
           
        </tr>
<?php 
       echo "<input type='hidden' name='numero[]' value=$row[0]>";
        
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
</div>

<!--///////////////////////-->
<div id="pestana11">
<br><b>Servicio Maquillaje:</b><br><br>
<table border="2">
	<thead>
        <th>Producto</th>
        <th>Costo de Compra</th>
        <th>Costo de Venta</th>
        <th>Stock</th>
     </thead>
     <!-- Maquillaje -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysqli_fetch_array($resultado11)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[1]); ?></td>
            <td> <input type="text" name='costoC[]' style="height:25px; width:100px;" required></td>
            <td> <input type="text" name='costoV[]' style="height:25px; width:100px;" required></td>
            <td> <input type="text" name='stock[]' style="height:25px; width:100px;" required></td>
           
        </tr>
<?php 
       echo "<input type='hidden' name='numero[]' value=$row[0]>";
        
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
</div>

<!--///////////////////////-->
<div id="pestana12">
<br><b>Servicio Maquillaje:</b><br><br>
<table border="2">
	<thead>
        <th>Producto</th>
        <th>Costo de Compra</th>
        <th>Costo de Venta</th>
        <th>Stock</th>
     </thead>
     <!-- Maquillaje -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysqli_fetch_array($resultado12)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[1]); ?></td>
            <td> <input type="text" name='costoC[]' style="height:25px; width:100px;" required></td>
            <td> <input type="text" name='costoV[]' style="height:25px; width:100px;" required></td>
            <td> <input type="text" name='stock[]' style="height:25px; width:100px;" required></td>
           
        </tr>
<?php 
       echo "<input type='hidden' name='numero[]' value=$row[0]>";
        
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
</div>

<!--///////////////////////-->

<div id="pestana13">
<br><b>Servicios Otros:</b><br><br>
<table border="2">
	<thead>
        <th>Producto</th>
        <th>Costo de Compra</th>
        <th>Costo de Venta</th>
        <th>Stock</th>
     </thead>
     <!-- Cortes -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysqli_fetch_array($resultado13)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[1]); ?></td>
            <td> <input type="text" name='costoC[]' style="height:25px; width:100px;" required></td>
            <td> <input type="text" name='costoV[]' style="height:25px; width:100px;" required></td>
            <td> <input type="text" name='stock[]' style="height:25px; width:100px;" required></td>
           
        </tr>
<?php 
       echo "<input type='hidden' name='numero[]' value=$row[0]>";
          
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