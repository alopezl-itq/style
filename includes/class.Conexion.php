<?php

#clase conexión hereda de MYSQLI
class Conexion extends MySQLi{
		#constructor de conexión
		public function __construct(){
			#constructor de mysql con la conexión
		parent::__construct('localhost','root','','style');
		#Establece el charset para consultas 
		$this->query("SET NAMES 'utf8';");
		#Devuelve la respuesta de la conexión
		$error=mysqli_connect_errno() ? die('Error con la conexión'): $x = 'Conectado';
		#borra la respuesta para liberar memoria
		unset($x);
		
	
	}
	#función recorrer, regresa la lista de la consulta
	public function recorrer($y){
		return mysqli_fetch_array($y);	
	}
	
	}
$db = new Conexion();

?>