<?php
include_once("../../clases/Usuario.php");


class Controlador{

	public function __construct(){
		
		$this->usuario=new Usuario();
		
		}
	
	public function index(){
		
		$resultado =$this->usuario->listar();
		return $resultado;
		
		}
		
		
	public function crear($id_usuario, $nombre, $apellido_p, $apellido_m, $sexo, $fecha_nacimiento, $foto, $email, $telefono, $observaciones, $usuario, $password, $id_redes, $id_tipo_usuario, $id_estatus, $id_empresa, $id_direccion, $id_municipio, $id_estado){
		
			$this->usuario->set("id_usuario",$id_usuario);
			$this->usuario->set("nombre",$nombre);
			$this->usuario->set("apellido_p",$apellido_p);
			$this->usuario->set("apellido_m",$apellido_m);
			$this->usuario->set("sexo",$sexo);
			$this->usuario->set("fecha_nacimiento",$fecha_nacimiento);
			$this->usuario->set("foto",$foto);
			$this->usuario->set("email",$email);
			$this->usuario->set("telefono",$telefono);
			$this->usuario->set("observaciones",$observaciones);
			$this->usuario->set("usuario",$usuario);
			$this->usuario->set("password",$password);
			$this->usuario->set("id_redes",$id_redes);
			$this->usuario->set("id_tipo_usuario",$id_tipo_usuario);
			$this->usuario->set("id_estatus",$id_estatus);
			$this->usuario->set("id_empresa",$id_empresa);
			$this->usuario->set("id_direccion",$id_direccion);
			
			$resultado=$this->usuario->crear();
			return $resultado;
		
		}



	public function eliminar($id_usuario){
			$this->usuario->set("id_usuario",$id_usuario);
			$this->usuario->eliminar();
			
		}	
		
		public function ver($id_usuario){
			$this->usuario->set("id_usuario",$id_usuario);
		$resul=$this->usuario->ver();
			
		  return $resul;
			
		}
		
		
	 
	 
		
		
		public function editar($id_usuario){
			$this->usuario->set("id_usuario",$id_usuario);
			$resultado=$this->usuario->editar();
			
		}	
	

}

?>