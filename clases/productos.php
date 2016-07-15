<?php
include_once('conexion.php');

class Producto
{
//Declaracion de atributos
private $id_marca;
private $id_linea_producto;
private $descripcion_linea;
private $descripcion_marca;

private $id_productos;
private $stock;
private $precio_venta;
private $precio_compra;
private $id_proveedor;
private $descripcion_productos;
private $presentacion;
private $id_producto_empresa;

//Aqui comienzan las funciones

	public function __construct(){
		$this->con = new Conexion();
	}

public function set($atributo, $contenido){
		$this->$atributo = $contenido;
	}	
	
	public function get($atributo){
		return $this->$atributo;
	}

//Con esta funcion se pueden ver las marcas
		public function verMarcas(){
		$sql ="Select * FROM marcas";
		$res=$this->con->consultaR($sql);
		return $res;
		}
//Con esta funcion se pueden ver las lineas de productos segun el identificador de la marca
		public function verLineaProductos(){
		$sql ="Select * FROM linea_productos WHERE id_marca=$this->id_marca";
		$res=$this->con->consultaR($sql);
		return $res;
		}
	
//Con esta funcion se pueden ver los productos segun sus identificadores de marca y linea de producto
	public function verproductos(){
	$sql ="SELECT productos.id_productos, linea_productos.descripcion_linea, productos.descripcion_productos, productos.presentacion FROM productos INNER JOIN linea_productos ON productos.id_linea_productos=linea_productos.id_linea_producto where productos.id_marca=$this->id_marca ORDER BY productos.id_productos";
	$res=$this->con->consulta($sql);
	return $res;
	}
	//Con esta funcion se pueden ver los productos segun sus identificadores de marca y linea de producto que no han sido seleccionados
	public function verproductosN(){
		
         $sql ="SELECT productos.id_productos, linea_productos.descripcion_linea, productos.descripcion_productos, productos.presentacion, productos.id_productos FROM productos INNER JOIN linea_productos ON productos.id_linea_productos=linea_productos.id_linea_producto where productos.id_marca=$this->id_marca  ORDER BY productos.id_productos";
		 $resultado=$this->con->consulta($sql);
		 return $resultado;
	    
	}
	//Con esta funcion se agregan los productos a una empresa, previamente se comprueba no exista ya un producto para que no se repita
	public function agregarProductoEmpresa(){
		$sql1="SELECT * FROM productos_empresa WHERE id_empresa=$this->id_empresa and id_producto=$this->id_producto";
		 $resultado=$this->con->consulta($sql1);
		$row = mysqli_fetch_array($resultado);
		$numero= $row[0];

		 if($numero==null){
			 $SQL="INSERT INTO `productos_empresa`( `stock`, `id_empresa`, `id_producto`, `precio_venta`, `precio_compra`) VALUES(0,$this->id_empresa, $this->id_producto,0,0)";
		$this->con->insert($SQL);
		 }
			return true;
	}
	//Con esta funcion se muestran los productos de una empresa 

	public function verProductosEmpresa(){
		$sql ="SELECT x.id_producto_empresa, p.descripcion_productos from productos p,productos_empresa x WHERE p.id_productos=x.id_producto and p.id_marca=$this->id_marca and x.id_empresa=$this->id_empresa";

		$resultado=$this->con->consulta($sql);
		return $resultado;
	}
	//Con esta funcion se actualizan precion de compra y venta de los productos de una empresa 
	public function actualizarProductoEmpresa(){
		$SQL="UPDATE productos_empresa SET stock=$this->stock,precio_compra=$this->precio_compra, precio_venta=$this->precio_venta WHERE id_producto_empresa=$this->id_producto_empresa"; 
		$this->con->update($SQL);
		return true;
	}
	//Con esta funcion se visualizan los servicios de una empresa con mas detalles, marca, linea de productos, productos, precio de compra, precio de venta, stock

	public function ver(){

	$sql = "SELECT m.descripcion_marca, l.descripcion_linea, p.descripcion_productos, p.presentacion ,e.precio_compra,e.precio_venta, e.stock from productos p, linea_productos l, productos_empresa e, marcas m WHERE e.id_producto=p.id_productos and p.id_marca=m.id_marca and p.id_linea_productos=l.id_linea_producto and e.id_empresa=$this->id_empresa";
		$resultado = $this->con->consulta($sql);
		
		return $resultado;
	}

	//Con esta funcion se consulta si existe un identificador de un producto en una empresa, si es correcto no semuestra el id en el form de agregar mas productos

	public function consultar(){

		$sql = "SELECT `id_producto` FROM `productos_empresa` WHERE `id_producto`=$this->id_producto and `id_empresa`=$this->id_empresa";
		$resultado = $this->con->consulta($sql);
		
		return $resultado;
	}

}
?>