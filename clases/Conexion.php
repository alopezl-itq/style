<?php


class Conexion extends MySQLi{
		//constructor de conexiÃ³n
		public function __construct(){
			//constructor de mysql con la conexiÃ³n
		//parent::__construct('localhost','alejan14_style','style16','alejan14_style');//sitio
		parent::__construct('localhost','desarrollo','style16','style');//local
		#Establece el charset para consultas 
		$this->query("SET NAMES 'utf-8';");
		#Devuelve la respuesta de la conexiÃ³n
		$error=mysqli_connect_errno() ? die('Error con la conexión'.mysqli_connect_error()): $x = 'Conectado';
		#borra la respuesta para liberar memoria
		unset($x);
		//$this->Miconexion = mysqli_connect('localhost','alejan14_style','style16','alejan14_style'); sitio web
		$this->Miconexion = mysqli_connect('localhost','desarrollo','style16','style');//local
	
	}
	#funcin recorrer, regresa la lista de la consulta
	public function recorrer($y){
		return mysqli_fetch_array($y);
	}
	
	public function consultaS($sql){
	mysqli_query($sql);
}

public function consultaR($sql){
	
	
	$consulta = mysqli_query($this->MiConexion,$sql);
	return $consulta;
	}
	
	}

 

 

 
 
 ?>