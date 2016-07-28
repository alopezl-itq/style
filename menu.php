<?php
include_once('clases/comunes.php');

session_start();

$_SESSION['id_user']=2;
function menu_usuario(){
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
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
        
        <script src="js/vendor/jquery-1.11.0.min.js"></script>
    </head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
      <div class="logo-wrap col-md-2 col-sm-2 col-lg-2 col-xs-2"></div>
    <ul class="nav navbar-nav">
    <li class="active"><a href="index.php">Inicio</a></li>
<?php
	 if(!isset($_SESSION['id_user'])){
		 "no hay variable de session";
		 //header("location:../index.html");
	 }else{
	 
	 		$id=$_SESSION['id_user'];	 
	
	 		//$sql="select * from modulo_usuario where id_usuario='".$id."'";
	 		echo $sql="SELECT n.descripcion, n.vista from modulo n, modulo_usuario m where (m.id_usuario='".$id."' and n.id_modulo=m.id_modulo ) group by n.vista";//para Memo
	//$sql= "select * from modulo group by vista";// Para Hector
	 		$db = new Conexion();
	 		if($menu=mysqli_query($db,$sql)){
		 
	 			while($dato=mysqli_fetch_array($menu)){
		 		echo "<li class='dropdown'>";	
		 			echo  "<a class='dropdown-toggle' data-toggle='dropdown' href='#'>".(utf8_encode($dato['vista']))."<span class='caret'></span></a>";
		 			echo "<ul class='dropdown-menu'>";
		 			$sql2="SELECT n.controlador from modulo n, modulo_usuario m where (m.id_usuario='".$id."' and n.id_modulo=m.id_modulo and n.vista='".$dato['vista']."')";
		 			$sub=mysqli_query($db, $sql2);
		 			while($dato2=mysqli_fetch_array($sub)){
		 			
	 			//echo  "<li><a href='vistas/".$dato['vista']."/?cargar=".$dato['controlador']."'>".$dato['descripcion']."</a></li>"; //original
	 			echo  "<li><a href='vistas/".elimina_acentos(utf8_encode($dato['vista']))."/?cargar=".elimina_acentos(utf8_encode($dato['vista']))."&controlador=".$dato2['controlador']."'>".utf8_encode($dato2['controlador'])."</a></li>";
	 			}
	 			
	 			echo "</ul></li>";
		 	}
	 		} else {
	 			echo mysqli_error($db);
	 		}
	 }
	
}
menu_usuario();

?>
      <li><a href="clases/salir.php">Salir</a></li> 
    </ul>
  </div>
</nav>

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