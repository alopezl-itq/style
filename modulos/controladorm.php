<?php
include_once("../../clases/modulos.php");


class Controlador{

	public function __construct(){
		
		$this->modulo=new Modulo();
		
		}
	
	
		public function ver(){
			$resultado=$this->modulo->ver();
		  return $resultado;
			
		}
		public function empleado($id_empresa){
			$this->modulo->set("id_empresa",$id_empresa);
			$resultado=$this->modulo->empleado();
		  return $resultado;
			
		}

		public function insert($modulo,$empleado){
			$this->modulo->set("modulo",$modulo);
			$this->modulo->set("empleado",$empleado);
			$resultado=$this->modulo->insert();
		  return $resultado;
			
		}


		
	}	


?>