<?php


include 'clases/comunes.php';
session_start();

// ---   ACTIVAR FUNCION PARA USAR MENU DINAMICO   -----
//function menu_usuario(){

//validarSesion();


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
                                <li><a href="https://www.facebook.com/Elitebeautyselects/" class="fa fa-facebook" target="_blank"></a></li>
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
                                        
 <!-- MENU DINÁMICO FUNCIONANDO -->                                       
<?php
/*
	 if(!isset($_SESSION['id_user'])){
		 "no hay variable de session";
		 //header("location:../index.html");
	 }else{
	 
	 		$id=$_SESSION['id_user'];	 
	
	 		//$sql="select * from modulo_usuario where id_usuario='".$id."'";
	 		$sql="SELECT n.descripcion, n.vista from modulo n, modulo_usuario m where (m.id_usuario='".$id."' and n.id_modulo=m.id_modulo ) group by n.vista";//para Memo
	//$sql= "select * from modulo group by vista";// Para Hector
	 		$db = new Conexion();
	 		if($menu=mysqli_query($db,$sql)){
		 
	 			while($dato=mysqli_fetch_array($menu)){
		 		echo "<li class='dropdown'>";	
		 			echo  "<a class='dropdown-toggle' data-toggle='dropdown' href='#'>".(utf8_encode($dato['vista']))."<span class='caret'></span></a>";
		 			echo "<ol class='dropdown-menu'>";
		 			$sql2="SELECT n.controlador from modulo n, modulo_usuario m where (m.id_usuario='".$id."' and n.id_modulo=m.id_modulo and n.vista='".$dato['vista']."')";
		 			$sub=mysqli_query($db, $sql2);
		 			while($dato2=mysqli_fetch_array($sub)){
		 			
	 			//echo  "<li><a href='vistas/".$dato['vista']."/?cargar=".$dato['controlador']."'>".$dato['descripcion']."</a></li>"; //original
	 			echo  "<li><a href='vistas/".elimina_acentos(utf8_encode($dato['vista']))."/?cargar=".elimina_acentos(utf8_encode($dato['vista']))."&controlador=".$dato2['controlador']."'>".utf8_encode($dato2['controlador'])."</a></li>";
	 			}
	 			
	 			echo "</ol></li>";
		 	}
	 		} else {
	 			echo mysqli_error($db);
	 		}
	 }
	
}
menu_usuario();
*/
?>
										<li><a href="vistas/usuarios">Usuarios</a></li>
                                       	
                                       
                                        <li><a href="vistas/esteticas">Estéticas</a></li>
                                       	<li><a href="vistas/cursos">Cursos</a></li>
                                       	<li><a href="vistas/ventas">Ventas</a></li>
                                       	
                                       <li><a href="vistas/clientes">Clientes</a></li>
                                       <li><a href="vistas/agendar">Agenda</a></li>
                                       
                                       	
                                       <li><a href="vistas/empleados">Empleados</a></li>
                                       <li><a href="vistas/servicios/servicios.php">Servicios</a></li>
                                       <li><a href="vistas/productos/menu.php">Productos</a></li>
<<<<<<< HEAD
                                       <li><a href="vistas/modulos">Productos</a></li>
                                       	
                                        <li><a class="glyphicon-arrow-right" href="clases/salir.php">Salir</a></li>                               
                                    </ul>                                    
=======
                                       <li><a href="vistas/compras">Compras</a></li>
                                       <li><a class="glyphicon-arrow-right" href="clases/salir.php">Salir</a></li>                               
                                    </ul>                                        
>>>>>>> origin/master
                                </div> <!-- /.main-menu -->
                            </div> <!-- /.row -->
                        </div> <!-- /#menu-wrapper -->                        
                    </div> <!-- /.container -->
                </div> <!-- /.main-header -->
            </div> <!-- /.site-header -->
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

</body>

</html>
