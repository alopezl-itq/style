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
			$_SESSION['tipo']=$dato['id_usuario'];
			$_SESSION['id_user']=$dato['id_usuario'];
			$_SESSION['nombre']=utf8_encode($dato['nombre_usuario'])." ".utf8_encode($dato['apellido_p'])." ".utf8_encode($dato['apellido_m']);
			$_SESSION['login']=true;
			$_SESSION['estetica']=$dato['id_empresa'];
			$_SESSION['empresa']=$dato['id_empresa'];
			
			header("location: principal.php");
			


			}else{
				header ("location: index.php");
				}
				
				
	}
public function Registro(){
	
	}
public function ClavePerdida(){
	
	}
}
?>