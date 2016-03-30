<?php

require('includes/class.Conexion.php');


$modo = isset($_GET['modo']) ? $_GET['modo'] : 'default';

switch($modo){
	case 'login':
			if(isset($_POST['login'])){
				if(!empty($_POST['user']) and !empty($_POST['pass'])){
					include ('includes/class.Acceso.php');
					$login = new Acceso($_POST['user'],$_POST['pass']);
					$login->Login();
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
	
	break;
	
	}

?>

