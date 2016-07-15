<?php
include_once("../../clases/cursos.php");


class c_cursos{

	public function __construct(){
		
		$this->curso=new cursos();
		
		}
	
	public function index(){
		
		$resultado =$this->curso->listar();
		return $resultado;
		
		}
		
		
	public function crear( $descripcion, $fecha_inicio, $fecha_final, $imparte, $nombre_curso, $empresa, $archivo){
		

			$this->curso->set("descripcion",$descripcion);
			$this->curso->set("fecha_inicio",$fecha_inicio);
			$this->curso->set("fecha_final",$fecha_final);
			$this->curso->set("imparte",$imparte);
			$this->curso->set("nombre_curso",$nombre_curso);
			$this->curso->set("empresa",$empresa);
			$this->curso->set("archivo",$archivo);
			



		$resultado=$this->curso->crear();
			return $resultado;
		
		}



	public function eliminar($id_curso){
			$this->curso->set("id_empresa",$id_curso);
			$this->curso->eliminar();
			
		}	
		
		public function ver($id_curso){
			$this->curso->set("id_curso",$id_curso);
		$resul=$this->curso->ver();
			
		  return $resul;
			
		}
		
		
	 
	 
		
		
		public function editar($id_curso){
			$this->curso->set("id_curso",$id_curso);
			$resultado=$this->curso->editar();
			
		}	
	

}

?>