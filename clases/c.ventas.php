<?php
include_once("../../clases/usuario.php");
include_once("../../clases/ventas.php");


class controlador{

	public function __construct(){
		
		$this->ventas=new ventas();
		
		}
	
	public function index(){
		
		$resultado =$this->ventas->listar();
		return $resultado;
		
		}
		
		
		

	public function eliminarventa($id_detalle_ventas){
			$this->venta->set("id_detalle_ventas",$id_detalle_ventas);
			$this->venta->eliminar();
			
		}	
		
		public function verventa($id_detalle_ventas){
			$this->venta->set("id_detalle_ventas",$id_detalle_ventas);
		$resul=$this->venta->ver();
			
		  return $resul;
			
		}
		
		
	public function crearventa( $id_venta, $monto, $fecha, $id_cliente,$id_usuario,$id_empresa){
		

			$this->venta->set("id_venta",$id_venta);
			$this->venta->set("monto",$monto);
			$this->venta->set("fecha",$fecha);
			$this->venta->set("id_cliente",$id_cliente);
			$this->venta->set("id_usuario",$id_usuario);
			$this->venta->set("id_empresa",$id_empresa);
			


		$resultado=$this->venta->crearventa();
			return $resultado;
		
		}


	

}

?>