<?php

require('clases/conexion.php');


$modo = isset($_GET['modo']) ? $_GET['modo'] : 'default';

switch($modo){
	case 'login':
			if(isset($_POST['login'])){
				if(!empty($_POST['usuario']) and !empty($_POST['password'])){
					include ('clases/class.Acceso.php');
					$login = new Acceso($_POST['usuario'],$_POST['password']);
					$login->Login();
			}else{
				header('location: index.php');
			}		
			}else{
				header('location: index.php');
			}
	break;
	case 'registro':
		echo'registro';
	break;
	default:
	
	break;
	
	}

?>

