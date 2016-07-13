<?php
include_once('conexion.php');
 function salir(){
    session_start();
    session_destroy();
    session_write_close();
}

function validarSesionEnVistas(){
    if(isset($_SESSION['login'])){
        echo "Bienvenido ".utf8_decode($_SESSION['nombre']);
    }else{
        header ("location:index.html");
    }
    
}

function validarSesion(){
    if(isset($_SESSION['login'])){
        echo "Bienvenido ".utf8_decode($_SESSION['nombre']);
    }else{
        header ("location:index.html");
    }
    
}

function verValorClienteEmpresa($id_empresa,$tipo){
    $sql='SELECT cliente_'.$tipo.' FROM `empresas` where id_empresa='.$id_empresa;
    $db = new Conexion();
    $resultado =$db->consultaR($sql);

}

function menu(){
	 $id=$_SESSION['id_user'];
	 //$sql="select * from modulo_usuario where id_usuario='".$id."'";
	 $sql="SELECT * from modulo n, modulo_usuario m where (m.id_usuario='".$id."' and n.id_modulo=m.id_modulo)";
	
	 $db = new Conexion();
	 if($menu=mysqli_query($db,$sql)){
		 
		 while($dato=mysqli_fetch_array($menu)){
			 echo  "<li><a href='vistas/".$dato['vista']."?cargar=".$dato['controlador']."'>".$dato['descripcion']."</a></li>"; 
		 }
	 } else {
		 echo mysqli_error($db);
	 }	
}
?>