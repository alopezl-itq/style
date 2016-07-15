<?php
include_once("../../clases/venta.php");


class c_venta{

	public function __construct(){
		
		$this->estetica=new estetica();
		
		}
	
	public function index(){
		
		$resultado =$this->estetica->listar();
		return $resultado;
		
		}
		
		
	public function crear( $nombre,$imagen, $slogan, $cliente_a, $cliente_b, $cliente_c, $cliente_d, $id_estatus, $calle, $no_ext, $no_int,$id_estado){
		

			$this->estetica->set("nombre",$nombre);
			$this->estetica->set("imagen",$imagen);
			$this->estetica->set("eslogan",$slogan);
			$this->estetica->set("cliente_a",$cliente_a);
			$this->estetica->set("cliente_b",$cliente_b);
			$this->estetica->set("cliente_c",$cliente_c);
			$this->estetica->set("cliente_d",$cliente_d);
			$this->estetica->set("id_estatus",$id_estatus);
			$this->estetica->set("id_estado",$id_estado);
			$this->estetica->set("calle",$calle);
			$this->estetica->set("no_int",$no_int);
			$this->estetica->set("no_ext",$no_ext);




		$resultado=$this->estetica->crear();
			return $resultado;
		
		}



	public function eliminar($id_estetica){
			$this->estetica->set("id_empresa",$id_estetica);
			$this->estetica->eliminar();
			
		}	
		
		public function ver($id_estetica){
			$this->estetica->set("id_estetica",$id_estetica);
		$resul=$this->estetica->ver();
			
		  return $resul;
			
		}
		
		
	 
	 
		
		
		public function editar($id_estetica){
			$this->estetica->set("id_estetica",$id_estetica);
			$resultado=$this->estetica->editar();
			
		}	
	

}

?>