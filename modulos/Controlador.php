<?php
include_once("../../clases/usuario.php");
include_once("../../clases/venta.php");


class Controlador{

	public function __construct(){
		
		$this->usuario=new Usuario();
		$this->venta=new Venta();
		
		}
	
	public function index(){
		
		$resultado =$this->usuario->listar();
		$resultado2 =$this->Venta->listar();
		return $resultado,$resultado2;
		
		}
		
		
	public function crear( $nombre, $apellido_p, $apellido_m, $sexo, $fecha_nacimiento, $foto, $email, $telefono, $observaciones, $usuario, $password, $id_tipo_usuario, $id_estatus, $id_empresa, $id_estado,$nombre_calle,$no_int,$no_ext){
		

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

			$this->usuario->set("id_tipo_usuario",$id_tipo_usuario);
			$this->usuario->set("id_estatus",$id_estatus);
			$this->usuario->set("id_empresa",$id_empresa);
			$this->usuario->set("id_estado",$id_estado);
			$this->usuario->set("nombre_calle",$nombre_calle);
			$this->usuario->set("no_int",$no_int);
			$this->usuario->set("no_ext",$no_ext);




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
		

	public function eliminar($id_detalle_ventas){
			$this->usuario->set("id_detalle_ventas",$id_detalle_ventas);
			$this->id_detalle_ventas->eliminar();
			
		}	
		
		public function ver($id_detalle_ventas){
			$this->usuario->set("id_detalle_ventas",$id_detalle_ventas);
		$resul=$this->venta->ver();
			
		  return $resul;
			
		}
		
		
	public function crearventa( $id_detalle_ventas, $id_servicio, $id_producto, $id_venta,){
		

			$this->usuario->set("id_detalle_ventas",$id_detalle_ventas);
			$this->usuario->set("id_servicio",$id_servicio);
			$this->usuario->set("id_producto",$id_producto);
			$this->usuario->set("id_venta",$id_venta);
			


		$resultado=$this->venta->crearventa();
			return $resultado;
		
		}


	

}

?>