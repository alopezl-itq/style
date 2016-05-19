<?php
class Enrutador
    {
	public function cargarVista($vista)
	{
	
	switch($vista):
	case "crear":
	include_once('../../vistas/Usuarios/'.$vista.'.php');
	break;
	
	case "ver":
	include_once('../../style/vistas/Usuarios/'.$vista.'.php');
	break;
	
	case "eliminar":
	include_once('../../vistas/Usuarios/'.$vista.'.php');
	break;
	
	
	case "editar":
	include_once('../../vistas/Usuarios/'.$vista.'.php');
	break;
	
	default:
	include_once('C../../vistas/Usuarios/error.php');
	endswitch;
	
	}
	
	
	
 public function validarGet($variable){
	 if(empty($variable)){
		 include_once('../vistas/Usuarios/inicio.php');
		 }else{
			 return true;
			 }
	 } 
	}

?>