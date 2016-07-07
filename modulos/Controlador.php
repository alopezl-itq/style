<?php
include_once("../../clases/usuario.php");


class Controlador{

	public function __construct(){
		
		$this->usuario=new Usuario();
		
		}
		
	
	public function index($tipo){
				
		$resultado=$this->usuario->listar($tipo);
		return $resultado;
		
		}
	public function desactivados($tipo){

		$resultado=$this->usuario->listarDesactivados($tipo);
		return $resultado;

	}
	public function verestados(){
		$resultado=$this->usuario->verestados();
	}
		
		
		
		
public function crearUsuario( $nombre_usuario, $apellido_p, $apellido_m, $sexo, $fecha_nacimiento, $telefono,$email, $id_empresa,$id_tipo_usuario, $id_municipio,$colonia,$nombre_calle,$no_int, $no_ext,$cp,$usuario,$password){
		

			$this->usuario->set("nombre_usuario",$nombre_usuario);
			$this->usuario->set("apellido_p",$apellido_p);
			$this->usuario->set("apellido_m",$apellido_m);
			$this->usuario->set("sexo",$sexo);
			$this->usuario->set("fecha_nacimiento",$fecha_nacimiento);
			$this->usuario->set("telefono",$telefono);
			$this->usuario->set("email",$email);
			$this->usuario->set("id_empresa",$id_empresa);
			$this->usuario->set("id_tipo_usuario",$id_tipo_usuario);
			$this->usuario->set("id_municipio",$id_municipio);
			$this->usuario->set("colonia",$colonia);
			$this->usuario->set("nombre_calle",$nombre_calle);
			$this->usuario->set("no_int",$no_int);
			$this->usuario->set("no_ext",$no_ext);
			$this->usuario->set("cp",$cp);
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
	 
	 
		
		
		public function editar($id_usuario,$nombre_usuario,$apellido_p,$apellido_m,$sexo,$fecha_nacimiento,$telefono,$email,$id_empresa,$id_tipo_usuario,$id_municipio,$colonia,$nombre_calle,$no_int,$no_ext,$cp,$usuario,$password){
			 $this->usuario->set("id_usuario",$id_usuario);
			 $this->usuario->set("nombre_usuario",$nombre_usuario);
			 $this->usuario->set("apellido_p",$apellido_p);
			 $this->usuario->set("apellido_m",$apellido_m);
			 $this->usuario->set("sexo",$sexo);
			 $this->usuario->set("fecha_nacimiento",$fecha_nacimiento);
			 $this->usuario->set("telefono",$telefono);
			 $this->usuario->set("email",$email);
			 $this->usuario->set("id_empresa",$id_empresa);
			 $this->usuario->set("id_tipo_usuario",$id_tipo_usuario);
			 $this->usuario->set("id_municipio",$id_municipio);
			 $this->usuario->set("colonia",$colonia);
			 $this->usuario->set("nombre_calle",$nombre_calle);
			 $this->usuario->set("no_int",$no_int);
			 $this->usuario->set("no_ext",$no_ext);
			 $this->usuario->set("cp",$cp);
			 $this->usuario->set("usuario",$usuario);
			 $this->usuario->set("password",$password);
			$resultado=$this->usuario->editarUsuario();
			return $resultado;
			
		}	
		
		public function desactivar($id_usuario,$id_estatus){
			$this->usuario->set("id_usuario",$id_usuario);
			$this->usuario->set("id_estatus",$id_estatus);
			$resultado=$this->usuario->desactivar();
			return $resultado;
			
		}	
		
	

}

?>