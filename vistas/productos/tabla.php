<?php
include_once('../../modulos/controladorp.php');
session_start();
$id_empresa=$_SESSION['estetica'];
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
$resultado = $controlador->ver($id_empresa);
$resultado2 = $controlador->verlinealista();
$resultado3 = $controlador->verMarcaslista();
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
        <th>comisión para el empleado</th>
        <th>Eliminar</th>
        <th>Editar</th>

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
        <td><?php echo  utf8_encode($row['8']); ?> %</td>
       <?php
echo " <form method=\"POST\" action=\"del.php\">\n"; 
echo "        <INPUT TYPE='HIDDEN' VALUE=$row[7] name='numero'>\n"; 
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
<br><button type="button" style="height:38px; width:350px" data-toggle="modal" data-target="#ModalAdd">Insertar Nuevo Producto</button>

<form method="POST" action="menu.php">
<br><INPUT TYPE="SUBMIT" name="guardar" value="Agregar mas productos de lista" style="height:38px; width:350px" >
</form>



<!-- Modal-->
<div id="ModalAdd" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Insertar Producto</h4>
      </div>
      <div class="modal-body">

      <script  src="/../../js/jquery.js"></script>
        <div id="pestanas"> 
            <ul class="nav nav-tabs">
            <li role="presentation" class="active" ><a href="#pestana1" role="tab" data-toggle="tab">Marcas registradas</a></li>
            <li role="presentation"><a href="#pestana2" role="tab" data-toggle="tab">Marcas no registradas</a></li> 
            <div id="pestana1">
            <form METHOD="POST" ACTION="agregarproducto.php">
			<br><br>Marca :<br>
            <select name='marca'>
            <?php  while($row2 = mysqli_fetch_array($resultado3)): 
            echo "<option value='$row2[0]'>$row2[1]</option>";
            endwhile; 
            ?>
            </select><br>
            <br>Linea :<br>
            <select name='linea'>
            <?php  while($row3 = mysqli_fetch_array($resultado2)): 
            echo "<option value='$row3[0]'>$row3[1]</option>";
            endwhile; 
            ?>
            </select><br>
            <br>Nombre del Producto:<br>
            <b></b><input type="text" name='producto' value="0" style="height:27px; width:250px;" required><br>
            <br>Presentación :<br>
            <INPUT TYPE="TEXT" NAME="presentacion" required style="height:27px; width:250px;" required><b> (ml/pieza) </b><br>
            <br>Precio de compra:<br>
            <b>$ </b><INPUT TYPE="TEXT" NAME="precioc" required style="height:27px; width:250px;" required><br>
            <br>Precio de venta :<br>
            <b>$ </b><INPUT TYPE="TEXT" NAME="preciov" required style="height:27px; width:250px;" required><br>
            <br>Stock:<br>
            <INPUT TYPE="TEXT" NAME="stock" required style="height:27px; width:250px;" required><br>
            <br>Comisión para el empleado:<br>
            <td> <select name='comision'>
            <?php
            for ($i=0; $i<=100; $i++)
            {
                ?>
                <option value="<?php echo $i;?>"><?php echo $i;?>%</option>
                <?php
            }
            ?>
            </select></td>
            <br>
            <br>
			<br><INPUT TYPE="SUBMIT" style="height:38px; width:350px" value="Insertar" aling="Center"><br>
		</form>
</div>
    <div id="pestana2">
         <form METHOD="POST" ACTION="nuevoproducto.php">
			<br><br>Nueva marca :<br>
            <INPUT TYPE="TEXT" NAME="marca" required style="height:27px; width:250px;" required><br>
            <br>Nueva linea de producto :<br>
            <INPUT TYPE="TEXT" NAME="linea" required style="height:27px; width:250px;" required><br>
            <br>Nombre del Producto:<br>
            <b></b><input type="text" name='producto' value="0" style="height:27px; width:250px;" required><br>
            <br>Presentación :<br>
            <INPUT TYPE="TEXT" NAME="presentacion" required style="height:27px; width:250px;" required><b> (ml/pieza) </b><br>
            <br>Precio de compra:<br>
            <b>$ </b><INPUT TYPE="TEXT" NAME="precioc" required style="height:27px; width:250px;" required><br>
            <br>Precio de venta :<br>
            <b>$ </b><INPUT TYPE="TEXT" NAME="preciov" required style="height:27px; width:250px;" required><br>
            <br>Stock:<br>
            <INPUT TYPE="TEXT" NAME="stock" required style="height:27px; width:250px;" required><br>
            <br>Comisión para el empleado:<br>
            <td> <select name='comision'>
            <?php
            for ($i=0; $i<=100; $i++)
            {
                ?>
                <option value="<?php echo $i;?>"><?php echo $i;?>%</option>
                <?php
            }
            ?>
            </select></td>
            <br>
            <br>
        
			<br><INPUT TYPE="SUBMIT" style="height:38px; width:350px" value="Insertar" aling="Center"><br>
		</form>
</div>

















		  
      </div>
    </div>
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