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
		$sql=$db->query('select usuario,password from usuarios where usuario="'.$this->usuario.'" and password="'.$this->password.'";');
		$dato=$db->recorrer($sql);
		
		if($dato['usuario'] ==$this->usuario and $dato['password']==$this->password){
			session_start();
			$_SESSION['usuario'];
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