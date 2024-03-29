<?php
include_once('../../clases/empleado.php');
include_once('../../clases/usuario.php');




class ControladorE{

	public function __construct(){
		
	$this->empleado=new Empleado();
		
		
		}
	
	public function index($estetica){
		
		$resultado=$this->empleado->listarE($estetica);
		return $resultado;
		
		}
	
	
	public function desactivados($estetica){

		$resultado=$this->empleado->listarDesactivadosE($estetica);
		return $resultado;

	}
	public function verestados(){
		$resultado=$this->empleado->verestad();
	}
		
  
		
		
		
public function crearempleado( $nombre_usuario, $apellido_p, $apellido_m, $sexo, $fecha_nacimiento,$telcasa,$telefono,$email,$id_empresa,$id_tipo_usuario, $id_municipio,$colonia,$nombre_calle,$no_int, $no_ext,$cp,$usuario,$password,$sueldo_base,$Facebook,$twitter,$instagram){
		

			$this->empleado->set("nombre_usuario",$nombre_usuario);
			$this->empleado->set("apellido_p",$apellido_p);
			$this->empleado->set("apellido_m",$apellido_m);
			$this->empleado->set("sexo",$sexo);
			$this->empleado->set("fecha_nacimiento",$fecha_nacimiento);
			$this->empleado->set("telcasa",$telcasa);
			$this->empleado->set("telefono",$telefono);
			$this->empleado->set("email",$email);
			$this->empleado->set("id_empresa",$id_empresa);
			$this->empleado->set("id_tipo_usuario",$id_tipo_usuario);
			$this->empleado->set("id_municipio",$id_municipio);
			$this->empleado->set("colonia",$colonia);
			$this->empleado->set("nombre_calle",$nombre_calle);
			$this->empleado->set("no_int",$no_int);
			$this->empleado->set("no_ext",$no_ext);
			$this->empleado->set("cp",$cp);
            $this->empleado->set("usuario",$usuario);
			$this->empleado->set("password",$password);
			$this->empleado->set("sueldo_base",$sueldo_base);
			$this->empleado->set("Facebook",$Facebook);
			$this->empleado->set("twitter",$twitter);
			$this->empleado->set("instagram",$instagram);
		
			



		$resultado=$this->empleado->crearE();
			return $resultado;
			
		
		}
		
		
		
public function crearC( $id_tipo_curso,$fecha_inicio,$fecha_final, $imparte,$nombre_curso,$nom_empresa_foranea,$costo,$apoyo,$id_usuario){
		

			$this->empleado->set("id_tipo_curso",$id_tipo_curso);
			$this->empleado->set("fecha_inicio",$fecha_inicio);
			$this->empleado->set("fecha_final",$fecha_final);
			$this->empleado->set("imparte",$imparte);
			$this->empleado->set("nombre_curso",$nombre_curso);
			$this->empleado->set("nom_empresa_foranea",$nom_empresa_foranea);
			$this->empleado->set("costo",$costo);
			$this->empleado->set("apoyo",$apoyo);
			$this->empleado->set("id_usuario",$id_usuario);
			
			
		
		$resultado=$this->empleado->crearCursos();
			return $resultado;
		
		
			



			
		
		}
		
		
		
	    public function eliminar($id_usuario){
			$this->empleado->set("id_usuario",$id_usuario);
			$this->empleado->eliminar();
			
		}	
		
		public function verE($id_usuario){
			$this->empleado->set("id_usuario",$id_usuario);
		$resul=$this->empleado->verE();
			
		  return $resul;
			
		}
		
		public function verredes($id_usuario){

		$result=$this->empleado->verredes($id_usuario);
			
		  return $result;
		}
	 
	 
		
		
		public function editarE($id_usuario,$nombre_usuario,$apellido_p,$apellido_m,$sexo,$fecha_nacimiento,
		$telcasa,$telefono,$email,$id_tipo_usuario,$id_municipio,$colonia,$nombre_calle,$no_int,$no_ext,$cp,$usuario,$password,$sueldo_base,$Facebook,$twitter,$instagram){
			 $this->empleado->set("id_usuario",$id_usuario);
			 $this->empleado->set("nombre_usuario",$nombre_usuario);
			 $this->empleado->set("apellido_p",$apellido_p);
			 $this->empleado->set("apellido_m",$apellido_m);
			 $this->empleado->set("sexo",$sexo);
			 $this->empleado->set("fecha_nacimiento",$fecha_nacimiento);
			  $this->empleado->set("telcasa",$telcasa);
			 $this->empleado->set("telefono",$telefono);
			 $this->empleado->set("email",$email);
			 $this->empleado->set("id_tipo_usuario",$id_tipo_usuario);
			 $this->empleado->set("id_municipio",$id_municipio);
			 $this->empleado->set("colonia",$colonia);
			 $this->empleado->set("nombre_calle",$nombre_calle);
			 $this->empleado->set("no_int",$no_int);
			 $this->empleado->set("no_ext",$no_ext);
			 $this->empleado->set("cp",$cp);
			 $this->empleado->set("usuario",$usuario);
			 $this->empleado->set("password",$password);
			 $this->empleado->set("sueldo_base",$sueldo_base);
			$this->empleado->set("Facebook",$Facebook);
			$this->empleado->set("twitter",$twitter);
			$this->empleado->set("instagram",$instagram);



			
			$resultado=$this->empleado->editarEmpleado();
			return $resultado;
			
		}	
		
			public function desactivar($id_usuario,$id_estatus){
			$this->empleado->set("id_usuario",$id_usuario);
			$this->empleado->set("id_estatus",$id_estatus);
			$resultado=$this->empleado->desactivarE();
			return $resultado;
			
		
			
		}	
		
		
	public function listarC($id_usuario){
		$this->empleado->set("id_usuario",$id_usuario);
		$resultado=$this->empleado->listarCursos();	
		  return $resultado;
		} 
		
		
		public function verC($id_curso){
		$this->empleado->set("id_curso",$id_curso);
		$resul=$this->empleado->verCursos();
		return $resul;
			
		}
		
		
		public function editarC($id_curso,$id_tipo_curso,$fecha_inicio,$fecha_final, $imparte,$nombre_curso,$nom_empresa_foranea,$costo,$apoyo){
		
            $this->empleado->set("id_curso",$id_curso);
			$this->empleado->set("id_tipo_curso",$id_tipo_curso);
			$this->empleado->set("fecha_inicio",$fecha_inicio);
			$this->empleado->set("fecha_final",$fecha_final);
			$this->empleado->set("imparte",$imparte);
			$this->empleado->set("nombre_curso",$nombre_curso);
			$this->empleado->set("nom_empresa_foranea",$nom_empresa_foranea);
			$this->empleado->set("costo",$costo);
			$this->empleado->set("apoyo",$apoyo);
			$resultado=$this->empleado->editarCurso();
			return $resultado;
		
	}
	
	public function editarCom($id_usuario,$observaciones){
		
            $this->empleado->set("id_usuario",$id_usuario);
			$this->empleado->set("observaciones",$observaciones);
		    $resultado=$this->empleado->editarComent();
			return $resultado;
	}

}

?>