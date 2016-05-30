<?php

include_once('conexion.php');
 
 
 function salir(){
    session_start();
    session_destroy();
    session_write_close();
}


function validarSesion(){
    if(isset($_SESSION['login'])){
        echo "Bienvenido ".utf8_decode($_SESSION['nombre']);
    }else{
	    
        header ("location:../../index.html");
    }
    
}

function menu(){
	 
	 if(!isset($_SESSION['id_user'])){
		 "no hay variable de session";
		 //header("location:../index.html");
	 }else{
	 
	 		$id=$_SESSION['id_user'];
	 
	
	 		//$sql="select * from modulo_usuario where id_usuario='".$id."'";
	 		$sql="SELECT * from modulo n, modulo_usuario m where (m.id_usuario='".$id."' and n.id_modulo=m.id_modulo)";
	
	 		$db = new Conexion();
	 		if($menu=mysqli_query($db,$sql)){
		 
	 			while($dato=mysqli_fetch_array($menu)){
	 			//echo  "<li><a href='vistas/".$dato['vista']."/?cargar=".$dato['controlador']."'>".$dato['descripcion']."</a></li>"; //original
	 			echo  "<li><a href='vistas/".$dato['vista']."/?cargar=".$dato['vista']."&controlador=".$dato['controlador']."'>".$dato['descripcion']."</a></li>";
		 	}
	 		} else {
	 			echo mysqli_error($db);
	 		}
	 }
	
}

function menu_vistas(){
	 
	 if(!isset($_SESSION['id_user'])){
		 echo "no hay variable de session";
		 //header("location:../index.html");
	 }else{
	 
	 		$id=$_SESSION['id_user'];
	 
	
	 		//$sql="select * from modulo_usuario where id_usuario='".$id."'";
	 		$sql="SELECT * from modulo n, modulo_usuario m where (m.id_usuario='".$id."' and n.id_modulo=m.id_modulo)";
	
	 		$db = new Conexion();
	 		if($menu=mysqli_query($db,$sql)){
		 
	 			while($dato=mysqli_fetch_array($menu)){
	 			//echo  "<li><a href='vistas/".$dato['vista']."/?cargar=".$dato['controlador']."'>".$dato['descripcion']."</a></li>"; //original
	 			echo  "<li><a href='../".$dato['vista']."?cargar=".$dato['vista']."&controlador=".$dato['controlador']."'>".$dato['descripcion']."</a></li>";
		 	}
	 		} else {
	 			echo mysqli_error($db);
	 		}
	 }
	
}





?>