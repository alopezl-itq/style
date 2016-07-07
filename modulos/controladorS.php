<?php
include_once("../clases/servicios.php");


class Controlador{

	public function __construct(){
		
		$this->servicio=new Servicio();
		
		}
	
	public function index(){
		
		$resultado=$this->servicio->listar();
		return $resultado;
		
		}


	public function crearDesServicio($descripcionServicios,$id_servicio){
		

			$this->servicio->set("id_servicio",$id_servicio);
			$this->servicio->set("descripcionServicios",$descripcionServicios);
			
		$resultado=$this->servicio->crearDesServicio();
			return $resultado;
		}
		
public function crearServicio( $id_servicio, $detalle){
		

			$this->servicio->set("id_servicio",$id_servicio);
			$this->servicio->set("detalle",$detalle);
			
		$resultado=$this->usuario->crearServicio();
			return $resultado;
		}

	public function eliminar($id_servicio){
			$this->servicio->set("id_servicio",$id_servicio);
			$this->servicio->eliminar();
			
		}	
		public function ver(){
			$resultado=$this->servicio->ver();
		  return $resultado;
			
		}
		public function agregarServicioEmpresa($id_empresa,$id_servicio,$costo,$id_descripcion_servicios,$tiempo){

			$this->servicio->set("id_empresa",$id_empresa);
			$this->servicio->set("id_servicio",$id_servicio);
			$this->servicio->set("costo",$costo);
			$this->servicio->set("id_descripcion_servicios",$id_descripcion_servicios);
			$this->servicio->set("tiempo",$tiempo);
			$resultado=$this->servicio->agregarServicioEmpresa();
		  return $resultado;
		}

		public function agregarNuevoServicioEmpresa($id_empresa,$id_servicio,$costo,$descripcionServicios,$tiempo){

			$this->servicio->set("id_empresa",$id_empresa);
			$this->servicio->set("id_servicio",$id_servicio);
			$this->servicio->set("costo",$costo);
			$this->servicio->set("descripcionServicios",$descripcionServicios);
			$this->servicio->set("tiempo",$tiempo);
			$resultado=$this->servicio->agregarNuevoServicioEmpresa();
		  return $resultado;
		}

		public function actualizarServicioEmpresa($id_servicios_empresa,$costo,$tiempo){

			$this->servicio->set("id_servicios_empresa",$id_servicios_empresa);
			$this->servicio->set("costo",$costo);
			$this->servicio->set("tiempo",$tiempo);
			$resultado=$this->servicio->actualizarServicioEmpresa();
		  return $resultado;
		}
		public function serviciosCort(){
			$resultado=$this->servicio->serviciosCort();
		  return $resultado;
			
		}
		
		public function serviciosColor(){
			$resultado=$this->servicio->serviciosColor();
		  return $resultado;
			
		}
		public function serviciosPeinado(){
			$resultado=$this->servicio->serviciosPeinado();
		  return $resultado;
			
		}
		public function serviciosMaquillaje(){
			$resultado=$this->servicio->serviciosMaquillaje();
		  return $resultado;
			
		}
		public function serviciosOtros(){
			$resultado=$this->servicio->serviciosOtros();
		  return $resultado;
			
		
		}
		public function verServiciosEmpresa($id_servicio){

			$this->servicio->set("id_servicio",$id_servicio);

			$resultado=$this->servicio->verServiciosEmpresa();
		  return $resultado;
			
		}
		public function editarServicio($id_servicio, $descripcion){
		

			$this->servicio->set("id_servicio",$id_servicio);
			$this->servicio->set("servicio",$descripcion);

			$resultado=$this->servicio->editarServicio();
			return $resultado;
			
		}	
	}	


?>