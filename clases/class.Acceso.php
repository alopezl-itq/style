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
$sql=$db->query('select * from usuarios where usuario="'.$this->usuario.'" and password="'.$this->password.'" and id_estatus=1;');
		$dato=$db->recorrer($sql);
		
		if($dato['usuario'] ==$this->usuario&&$dato['password']==$this->password &&($dato['id_tipo_usuario']=='1')){


			session_start();
			$_SESSION['user']=$this->usuario;
			$_SESSION['id_user']=$dato['id_usuario'];
			$_SESSION['tipo']=$dato['id_tipo_usuario'];
			$_SESSION['nombre']=utf8_encode($dato['nombre_usuario'])." ".utf8_encode($dato['apellido_p'])." ".utf8_encode($dato['apellido_m']);
			$_SESSION['login']=true;
			header("location: principal.php");


			}
	elseif($dato['usuario'] ==$this->usuario&&$dato['password']==$this->password &&($dato['id_tipo_usuario']=='2')){


		session_start();
		$_SESSION['user']=$this->usuario;
		$_SESSION['id_user']=$dato['id_usuario'];
		$_SESSION['tipo']=$dato['id_tipo_usuario'];
		$_SESSION['empresa']=$dato['id_empresa'];
		$_SESSION['nombre']=utf8_encode($dato['nombre_usuario'])." ".utf8_encode($dato['apellido_p'])." ".utf8_encode($dato['apellido_m']);
		$_SESSION['login']=true;
		header("location: vistas/empleados/index.php");


		}
	elseif($dato['usuario'] ==$this->usuario&&$dato['password']==$this->password &&($dato['id_tipo_usuario']=='3')){
			session_start();
			$_SESSION['user']=$this->usuario;
			$_SESSION['id_user']=$dato['id_usuario'];
			$_SESSION['tipo']=$dato['id_tipo_usuario'];
			$_SESSION['empresa']=$dato['id_empresa'];
			$_SESSION['nombre']=utf8_encode($dato['nombre_usuario'])." ".utf8_encode($dato['apellido_p'])." ".utf8_encode($dato['apellido_m']);
			$_SESSION['login']=true;
			header("location: vistas/clientes/index.php");


				}elseif($dato['usuario'] ==$this->usuario&&$dato['password']==$this->password &&($dato['id_tipo_usuario']=='6')){


		session_start();
		$_SESSION['user']=$this->usuario;
		$_SESSION['id_user']=$dato['id_usuario'];
			$_SESSION['tipo']=$dato['id_tipo_usuario'];
		$_SESSION['nombre']=utf8_encode($dato['nombre_usuario'])." ".utf8_encode($dato['apellido_p'])." ".utf8_encode($dato['apellido_m']);
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