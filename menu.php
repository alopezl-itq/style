
<?php
include_once('clases/comunes.php');

session_start();

$_SESSION['id_user']=2;
function menu_usuario(){
	 
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
		 			
		 			echo  "<li>".(utf8_encode($dato['vista']))."<ol>";
		 			
		 			$sql2="SELECT n.controlador from modulo n, modulo_usuario m where (m.id_usuario='".$id."' and n.id_modulo=m.id_modulo and n.vista='".$dato['vista']."')";
		 			$sub=mysqli_query($db, $sql2);
		 			while($dato2=mysqli_fetch_array($sub)){
		 			
	 			//echo  "<li><a href='vistas/".$dato['vista']."/?cargar=".$dato['controlador']."'>".$dato['descripcion']."</a></li>"; //original
	 			echo  "<li><a href='vistas/".elimina_acentos(utf8_encode($dato['vista']))."/?cargar=".elimina_acentos(utf8_encode($dato['vista']))."&controlador=".$dato2['controlador']."'>".utf8_encode($dato2['controlador'])."</a></li>";
	 			}
	 			
	 			echo "</li></ol>";
		 	}
	 		} else {
	 			echo mysqli_error($db);
	 		}
	 }
	
}
menu_usuario();

?>
