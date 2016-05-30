<?php
class Enrutador
    {
	public function cargarVista($vista,$controlador)
	{
	
	//echo $vista. "    ".$controlador."<br>";
	
	//echo '../../vistas/'.$vista."/".$controlador.'.php';
	include_once('../../vistas/'.$vista."/".$controlador.'.php');
	
	
	
	}
	
	
	
 public function validarGet($variable){
	 if(empty($variable)){
		 include_once('inicio.php');
		 }else{
			 return true;
			 }
	 } 
	}

?>