<?php
include_once("../../clases/productos.php");


class Controlador{

	public function __construct(){
		
		$this->producto=new Producto();
		
		}
	
	
		public function verMarcas(){
			$resultado=$this->producto->verMarcas();
		  return $resultado;
			
		}
		public function verLineaProductos($id_marca){
			$this->producto->set("id_marca",$id_marca);
			$resultado=$this->producto->verLineaProductos();
		  return $resultado;
			
		}
		
		public function verproductos($id_marca){
			$this->producto->set("id_marca",$id_marca);
			$resultado=$this->producto->verproductos();
		  return $resultado;
			
		}
		public function verProductoEmpresa($id_producto_empresa){
			$this->producto->set("id_producto_empresa",$id_producto_empresa);
			$resultado=$this->producto->verProductoEmpresa();
		  return $resultado;
			
		}
		public function verproductosN($id_marca,$id_empresa){
			$this->producto->set("id_marca",$id_marca);
			$this->producto->set("id_empresa",$id_empresa);
			$resultado=$this->producto->verproductosN();
		  return $resultado;
			
		}

		public function agregarProductoEmpresa($id_empresa,$id_producto){
			$this->producto->set("id_empresa",$id_empresa);
			$this->producto->set("id_producto",$id_producto);
			$resultado=$this->producto->agregarProductoEmpresa();
		  return $resultado;
			
		}

			public function verProductosEmpresa($id_marca,$id_empresa){
			$this->producto->set("id_marca",$id_marca);
			$this->producto->set("id_empresa",$id_empresa);
			$resultado=$this->producto->verProductosEmpresa();
		  return $resultado;
			
		}

		

		public function ver($id_empresa){
			$this->producto->set("id_empresa",$id_empresa);
			$resultado=$this->producto->ver();
		  return $resultado;
			
		}
		public function actualizarProductoEmpresa($id_producto_empresa,$stock,$precio_compra,$precio_venta){
			$this->producto->set("id_producto_empresa",$id_producto_empresa);
			$this->producto->set("precio_compra",$precio_compra);
			$this->producto->set("precio_venta",$precio_venta);
			$this->producto->set("stock",$stock);
			$resultado=$this->producto->actualizarProductoEmpresa();
		  return $resultado;
			
		}

		public function consultar($id_producto,$id_empresa){
			$this->producto->set("id_producto",$id_producto);
			$this->producto->set("id_empresa",$id_empresa);
			$resultado=$this->producto->consultar();
		  return $resultado;
			
		}

public function eliminar($id_producto_empresa){
			$this->producto->set("id_producto_empresa",$id_producto_empresa);
			$resultado=$this->producto->eliminar();
		  return $resultado;

}


	}	


?>