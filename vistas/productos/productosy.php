<?php
include_once('../../modulos/controladorp.php');

$controlador = new controlador();
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    session_start();
$id_empresa=$_SESSION['estetica'];
    $id_producto_empresa=$_POST["numero"];
    $costoC=$_POST["costoC"];
     $costoV=$_POST["costoV"];
    $stock=$_POST["stock"];
    $comision=$_POST["comision"];
    $count=count($id_producto_empresa);
    for ($i = 0; $i < $count; $i++) 
    {
        if(isset($_POST['guardar']))
            {
             $r=$controlador->actualizarProductoEmpresa($id_producto_empresa[$i],$stock[$i],$costoC[$i],$costoV[$i],$comision[$i]);
            }
    }
}
?>
<<<<<<< HEAD
<meta http-equiv="refresh" content="0;url=tabla.php">
=======

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
		   <!-- Necesitas esto para el bootstrap para el modal-->
  <meta charset="utf-8">
	 <link rel="stylesheet" href="../../css/templatemo_misc.css">
        <link rel="stylesheet" href="../../css/templatemo_style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- Fin bootstrap para el modal-->

        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/pestanas.css">
        <link rel="stylesheet" href="../../css/font-awesome.css">
        <link rel="stylesheet" href="../../css/animate.css">
        <link rel="stylesheet" href="../../css/templatemo_misc.css">
        <link rel="stylesheet" href="../../css/templatemo_style.css">
<?php 
echo "	<script src='../../js/vendor/modernizr-2.6.1-respond-1.1.0.min.js'></script>"; 
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
$resultado = $controlador->ver($id_empresa);
?>
<div align="center"> 
<table border="1">
	<thead>
        <th>Marca</th>
		<th>Linea</th>
        <th>Producto</th>
        <th>Presentacion</th>
        <th>Precio de compra</th>
		<th>Precio de venta</th>
        <th>Stock</th>
        <th>Editar</th>
        <th>Eliminar</th>
        

     </thead>
     <tbody>
     <?php  while($row = mysqli_fetch_array($resultado)): ?>
        <tr>
        <td><?php echo utf8_encode($row['0']); ?></td>
        <td><?php echo  utf8_encode($row['1']); ?></td>
        <td><?php echo  utf8_encode($row['2']); ?></td>
        <td><?php echo  utf8_encode($row['3']); ?></td>
         <td>$<?php echo utf8_encode($row['4']); ?> Pesos</td>
        <td>$<?php echo  utf8_encode($row['5']); ?> Pesos</td>
        <td><?php echo  utf8_encode($row['6']); ?> Unidades/piezas</td>
        <?php
        echo " <form method=\"POST\" action=\"del.php\">\n"; 
        echo "        <INPUT TYPE='HIDDEN' VALUE=\"$row[7]\" name='numero'>\n"; 
        echo "        <td> <INPUT TYPE=\"SUBMIT\" name=\"guardar\" value=\"Eliminar\"  style='height:30px; width:100px' ></td>\n"; 
        echo "        </form>\n"; 
        echo "        <form method=\"POST\" action=\"upd.php\">\n"; 
        echo "        <INPUT TYPE='HIDDEN' VALUE=$row[7] name='numero'>\n"; 
        echo "        <td> <INPUT TYPE=\"SUBMIT\" name=\"guardar\" value=\"Editar\"  style='height:30px; width:100px' ></td>\n"; 
        echo "        </form>\n";
        ?>

        </tr>
        
      <?php  
	  
	  
	  
	  endwhile; 
	  ?>
      
      
     </tbody>
</table>
</table>
<form method="POST" action="menu.php">
<br><INPUT TYPE="SUBMIT" name="guardar" value="Agregar mas productos" style="height:38px; width:350px" >
</form>
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
        
        <?php
echo "<script type='text/javascript' src='../../js/jquery.js'></script>";
echo "<script type='text/javascript' src='../../js/jqueryui.js'></script>";
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
>>>>>>> origin/master
