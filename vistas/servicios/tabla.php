<?php
include_once('../../modulos/controladors.php');
session_start();
$id_empresa=$_SESSION['estetica'];
$controlador = new controlador();
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
                                       <a href="#">Servicios</a>
                                    </h1>
                                </div> <!-- /.logo-wrapper -->
                                <div class="col-md-10 col-sm-10 main-menu text-right">
                                    <div class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></div>
                                    <ul class="menu-first">
                                        <li class="active"><a href="../../principal.php">Inicio</a></li>
                                        <li><a href="servicios.php"><b>Registrar Servicios</b></a></li>
                                    
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
        <th>Servicio</th>
		<th>Descripcion</th>
        <th>Costo</th>
        <th>tiempo</th>
        <th>Editar</th>
        <th>Eliminar</th>

     </thead>
     <tbody>
     <?php  while($row = mysqli_fetch_array($resultado)): ?>
        <tr>
        <td><?php echo utf8_encode($row['servicio']); ?></td>
        <td><?php echo  utf8_encode($row['descripcion']); ?></td>
        <td>$<?php echo  utf8_encode($row['costo']); ?> Pesos</td>
        <td><?php echo  utf8_encode($row['tiempo_servicio']); ?> minutos</td>
               <?php
echo " <form method=\"POST\" action=\"del.php\">\n"; 
echo "        <INPUT TYPE='HIDDEN' VALUE=$row[4] name='numero'>\n"; 
echo "        <td> <INPUT TYPE=\"SUBMIT\" name=\"guardar\" value=\"Eliminar\"  style='height:30px; width:100px' ></td>\n"; 
echo "        </form>\n"; 
echo "        <form method=\"POST\" action=\"upd.php\">\n"; 
echo "        <INPUT TYPE='HIDDEN' VALUE=$row[4] name='numero'>\n"; 
echo "        <td> <INPUT TYPE=\"SUBMIT\" name=\"guardar\" value=\"Editar\"  style='height:30px; width:100px' ></td>\n"; 
echo "        </form>\n";
?>
        </tr>
        
      <?php  
	  
	  
	  
	  endwhile; 
	  ?>
      
      
     </tbody>
</table>
<br><button type="button" style="height:38px; width:350px" data-toggle="modal" data-target="#ModalAdd">Insertar Nuevo Servicio</button>
<form method="POST" action="servicios.php">
<br><INPUT TYPE="SUBMIT" name="guardar" value="Agregar mas servicios de lista" style="height:38px; width:350px" >
</form>
</div>


<!-- Modal-->
<div id="ModalAdd" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Insertar Servicio</h4>
      </div>
      <div class="modal-body">
		  <form METHOD="POST" ACTION="nservicios.php">
			<br>Tipo de Servicio<br>
            <select name='tipo'><option value=1>Servicio de corte</option><option value=2>Servicio de color</option><option value=3>Servicio de peinado</option><option value=4 >Servicio de maquillaje</option><option value=5 >Otro tipo de servicio</option></select><br>
            <br>Nuevo Servicio:<br>
            <INPUT TYPE="TEXT" NAME="descripcion" required style="height:20px; width:100px;" required><br>
            <br>Costo del Servicio:<br>
            <input type="text" name='costo' style="height:20px; width:100px;" required><br>
           <br>Tiempo del Servicio:<br>
            <select name='tiempo'><option value=30>30 min</option><option value=60>1 hora</option><option value=90 >1 hora y 30 minutos</option><option value=120 >2 horas</option></select><br>
            <?
echo "<INPUT TYPE='HIDDEN' VALUE='$id_empresa' name='id_empresa'>";
?>
        
			<br><INPUT TYPE="SUBMIT" style="height:38px; width:350px" value="Insertar" aling="Center"><br>
		</form>
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
<?php

?>

    </body>
</html>