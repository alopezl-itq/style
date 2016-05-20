<?php
class Enrutador
    {
	public function cargarVista($vista)
	{
	
	switch($vista):
	case "crear":
	include_once('../../vistas/usuarios/'.$vista.'.php');
	break;
	
	case "ver":
	include_once('../../style/vistas/usuarios/'.$vista.'.php');
	break;
	
	case "eliminar":
	include_once('../../vistas/usuarios/'.$vista.'.php');
	break;
	
	
	case "editar":
	include_once('../../vistas/usuarios/'.$vista.'.php');
	break;
	
	default:
	include_once('C../../vistas/usuarios/error.php');
	endswitch;
	
	}
	
	
	
 public function validarGet($variable){
	 if(empty($variable)){
		 include_once('../vistas/usuarios/inicio.php');
		 }else{
			 return true;
			 }
	 } 
	}

?>