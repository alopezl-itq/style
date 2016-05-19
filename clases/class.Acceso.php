<?php

class Acceso{
	protected $usuario;
	protected $password;
	
	
	public function __construct($usuario,$password){
	$this->usuario=$usuario;
	$this->password=$password;
	
	}
public function Login(){
		
		$db = new Conexion();
		$sql=$db->query('select * from usuarios where usuario="'.$this->usuario.'" and password="'.$this->password.'";');
		$dato=$db->recorrer($sql);
		
		if($dato['usuario'] ==$this->usuario&&$dato['password']==$this->password){


			session_start();
			$_SESSION['user']=$this->usuario;
			$_SESSION['nombre']=$dato['nombre']." ".$dato['apellido_p']." ".$dato['apellido_m'];
			$_SESSION['login']=true;
			header("location: principal.php");


			}else{
				header ("location: index.html");
				}
				
				
	}
public function Registro(){
	
	}
public function ClavePerdida(){
	
	}
}
?>