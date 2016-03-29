<?php
include('includes/comunes.php');
//require('includes/class.Conexion.php');
//$db = new Conexion();

$modo = isset($_GET['modo']) ? $_GET['modo'] : 'default';

switch($modo){
	case 'login':
			if(isset($_POST['login'])){
				if(!empty($_POST['user']) and !empty($_POST['pass'])){
					
			}else{
				header('location: index.html');
			}		
			}else{
				header('location: index.html');
			}
	break;
	case 'registro':
		echo'registro';
	break;
	default:
	//$template = new Prinick();
	//$template -> display('index.html');
	break;
	
	}

?>

