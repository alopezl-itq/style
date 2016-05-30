<?php
include_once("../../clases/usuario.php");


class Controlador{

	public function __construct(){
		
		$this->usuario=new Usuario();
		
		}
	
	public function index(){
		
		$resultado=$this->usuario->listar();
		return $resultado;
		
		}
		
		
		
		
public function crearUsuario( $nombre_u, $apellido_p, $apellido_m, $sexo, $fecha_nacimiento, $telefono,$email, $id_empresa,$id_tipo_usuario, $id_estatus,$id_estado,$id_ciudad,$nombre_calle,$no_int, $no_ext,$usuario,$password){
		

			$this->usuario->set("nombre_u",$nombre_u);
			$this->usuario->set("apellido_p",$apellido_p);
			$this->usuario->set("apellido_m",$apellido_m);
			$this->usuario->set("sexo",$sexo);
			$this->usuario->set("fecha_nacimiento",$fecha_nacimiento);
			$this->usuario->set("telefono",$telefono);
			$this->usuario->set("email",$email);
			$this->usuario->set("id_empresa",$id_empresa);
			$this->usuario->set("id_tipo_usuario",$id_tipo_usuario);
			$this->usuario->set("id_estatus",$id_estatus);
			$this->usuario->set("id_estado",$id_estado);
			$this->usuario->set("id_ciudad",$id_ciudad);
			$this->usuario->set("nombre_calle",$nombre_calle);
			$this->usuario->set("no_int",$no_int);
			$this->usuario->set("no_ext",$no_ext);
            $this->usuario->set("usuario",$usuario);
			$this->usuario->set("password",$password);



		$resultado=$this->usuario->crearUsuario();
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
		
		public function verredes($id_usuario){
			$this->usuario->set("id_usuario",$id_usuario);
		$result=$this->usuario->verredes();
			
		  return $result;
		}
	 
	 
		
		
		public function editar($id_usuario){
			$this->usuario->set("id_usuario",$id_usuario);
			$resultado=$this->usuario->editar();
			
		}	
	

}

?>