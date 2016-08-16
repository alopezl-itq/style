<?php
include_once('../../clases/conexion.php');

class Usuario
{
//atributos

private $id_detalle_ventas;
private $id_servicio;
private $id_producto;
private $id_venta;
private $evaluacion;
private $id_ventas;
private $monto;
private $fecha;
private $id_cliente;
private $id_usuario;
private $id_empresa;

//metodos

public function __construct(){
		$this->con = new Conexion();
	}


public function set($atributo, $contenido){
	$this->$atributo = $contenido;
	}	
	
	public function get($atributo){
	return $this->$atributo;
	}


public function verempresas(){
	$sql ="Select * FROM empresas";
	$res=$this->con->consultaR($sql);
	return $res;
}
	public function vertipous(){
		$sql ="Select * FROM tipo_usuarios";
		$res=$this->con->consultaR($sql);
		return $res;
		}

	public function verestatus(){
	$sql ="Select * FROM estatus";
	$res=$this->con->consultaR($sql);
	return $res;
}
	public function verestados(){
		$sql ="Select * FROM estados";
		$res=$this->con->consultaR($sql);
		return $res;
	}
	public function verciudades($municipio1){
		$sql ="Select * FROM ciudades where id_municipio=".$municipio1;
		$res=$this->con->consultaR($sql);
		return $res;
	}
	public function vermunicipio($municipio){
		$sql ="Select * FROM municipios where id_estado=".$municipio;
		$res=$this->con->consultaR($sql);
		return $res;
	}
	
	public function listar(){
	$sql = "";
		$resultado = $this->con->consultaR($sql);
		return $resultado;
		
		
		
		}

		public function ver(){
		
		$sql = ("Select usuarios.*,empresas.*,direcciones.*,ciudades.*,municipios.*,estados.*,clientes.*,
productos.*,detalle_ventas.*,tipo_pago.*,ventas.* FROM usuarios,empresas,ciudades,municipios,estados,
direcciones,clientes,productos,ventas,detalle_ventas,tipo_pago WHERE usuarios.id_red=redes.id_red_social and usuarios.id_tipo_usuario=tipo_usuarios.id_tipo_usuario and usuarios.id_estatus=estatus.id_estatus 
			and usuarios.id_empresa=empresas.id_empresa and usuarios.id_direccion=direcciones.id_direccion and direcciones.id_ciudad=ciudades.id_ciudad 
			and ciudades.id_municipio=municipios.id_municipio and municipios.id_estado=estados.id_estado
		and usuarios.id_usuario = ".$this->id_detalle_ventas);
$resul = $this->con->consultaR($sql);
		$row =mysqli_fetch_assoc($resul) ;
		
	
		
		//set interno
		
		$this->id_detalle_ventas = $row['id_detalle_ventas'];
		$this->id_servicio = $row['id_servicio'];
		$this->id_producto = $row["id_producto"];
		$this->id_venta = $row["id_venta"];
		$this->evaluacion = $row["evaluacion"];
		$this->id_ventas = $row["id_ventas"];
		$this->monto = $row["monto"];
		$this->fecha = $row["fecha"];
		$this->id_cliente = $row["id_cliente"];
		$this->id_usuario = $row["id_usuario"];
		$this->usuario = $row["usuario"];
		$this->id_empresa = $row["id_empresa"];
		$this->id_direccion= $row['nombre_calle'];
		$this->id_direccion = $row['no_int'];
		$this->id_direccion = $row['no_ext'];
		$this->id_ciudad= $row['descripcion_ciudades'];
		$this->id_municipio=$row['descripcion_municipios'];
		$this->id_estado = $row['descripcion_estados'];
		
		return $row;
		}
		
	
		function vercliente($cliente){
		$sql ="Select * FROM clientes where id_cliente=".$cliente;
		$res=$this->con->consultaR($sql);
		return $res;
	} 
	
	    public function verproducto($producto){
		$sql ="Select * FROM productos_empresa where id_producto=".$producto;
		$res=$this->con->consultaR($sql);
		return $res;
	}
	
	    public function vercompra($compra){
		$sql ="Select * FROM detalle_ventas where id_detalle_ventas=".$compra;
		$res=$this->con->consultaR($sql);
		return $res;
	}
		public function tipopago($tpago){
		$sql ="Select * FROM tipo_pago where id_tipo_pago=".$tpago;
		$res=$this->con->consultaR($sql);
		return $res;
	}
	    public function totalventa($tventa){
		$sql ="Select * FROM ventas where id_ventas=".$tventa;
		$res=$this->con->consultaR($sql);
		return $res;
	}
		
		public function crearventa(){
			
			$sql= "INSERT INTO `detalle_ventas` (`id_detalle_ventas`, `id_servicio`, `id_producto`, `id_venta`) 
			VALUES (NULL, '$this->id_servicio', '$this->id_producto', '$this->id_venta');";
			$this->con->query($sql);
			return true;

			
	}		
			
			public function eliminar(){
				$sql = "DELETE FROM detalle_ventas WHERE id_detalle_ventas=".$this->id_detalle_ventas;
				$this->con->query($sql);				
				}
				
				/*public function editar(){
				$sql = "UPDATE detalle_ventas SET nombre = '".$this->nombre."', apellido_p = '".$this->apellido_p."', apellido_m = '".$this->apellido_m."', sexo= '".$this->sexo."', fecha_nacimiento = '".$this->fecha_nacimiento."', foto = '".$this->foto."', email = '".$this->email."', telefono = '".$this->telefono."', observaciones = '".$this->observaciones."12', usuario = '".$this->usuario."', password = '".$this->password."', id_redes =".$this->id_redes.",  id_estatus=".$this->id_estatus.", id_empresa=".$this->id_empresa." WHERE id_usuario = ".$this->id_usuario;
				
				$this->con->query($sql);
				
				}*/
			

}




?>