<?php
class Acceso{
	protected $user;
	protected $pass;
	
	
	public function __construct($usuario,$password){
	$this->user=$usuario;
	$this->pass=$password;
	
	}
public function Login(){
		
		$db = new Conexion();
		$sql=$db->query('select id_tipo_usuario from usuarios where usuario="'.$this->user.'" and password="'.$this->pass.'";');
		$dato=$db->recorrer($sql);
		
		if($dato['id_tipo_usuario'] ==1){
			session_start();
			$_SESSION['user'];
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