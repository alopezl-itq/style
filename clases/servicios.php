<?php
include_once('../clases/conexion.php');

class Servicio
{
//atributos
private $id_servicio;
private $descripcion;

private $id_descripcion_servicios;
private $descripcionServicios;
private $costo;
private $tiempo;
private $id_servicios_empresa;
private $numero;

private $id_servicio1;
private $servicio;

private $usu;

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

	public function verem(){
return  $this->usu->verempresas();
	}

public function listar(){

	$sql = ("SELECT s.servicio, d.descripcion from servicios s, descripcion_servicios d order by s.servicio asc");
	$resultado = $this->con->consulta($sql);
	return $resultado;
}



	public function verservicios(){
		$sql ="Select * FROM servicios";
		$res=$this->con->consultaR($sql);
		return $res;
		}

	public function verdescripcionservicios(){
	$sql ="Select * FROM descripcion_servicios";
	$res=$this->con->consultaR($sql);
	return $res;
}
	public function verservicios_empresa(){
		$sql ="Select * FROM servicios_empresa";
		$res=$this->con->consultaR($sql);
		return $res;
	}
	//Servicios de corte
	public function serviciosCort(){
		$sql ="SELECT * FROM descripcion_servicios where id_servicio=1 order by id_servicio LIMIT 0,5";
		$resultado=$this->con->consulta($sql);
		
		return $resultado;
	}
	//Servicios de corte
	public function serviciosColor(){
		$sql ="SELECT * FROM descripcion_servicios where id_servicio=2 order by id_servicio LIMIT 0,14";
		$resultado=$this->con->consulta($sql);
		
		return $resultado;
	}
	//Servicios de corte
	public function serviciosPeinado(){
		$sql ="SELECT * FROM descripcion_servicios where id_servicio=3 order by id_servicio LIMIT 0,7";
		$resultado=$this->con->consulta($sql);
		
		return $resultado;
	}
	//Servicios de corte
	public function serviciosMaquillaje(){
		$sql ="SELECT * FROM descripcion_servicios where id_servicio=4 order by id_servicio LIMIT 0,5";
		$resultado=$this->con->consulta($sql);
		
		return $resultado;
	}
	//Servicios de corte
	public function serviciosOtros(){
		$sql ="SELECT * FROM descripcion_servicios where id_servicio=5 order by id_servicio LIMIT 0,12";
		$resultado=$this->con->consulta($sql);
		
		return $resultado;
	}

	
		
		public function ver(){

		//$id_empresa=1;
	
		$sql = "SELECT s.servicio, d.descripcion, x.costo, x.tiempo from descripcion_servicios d, servicios s, servicios_empresa x WHERE x.id_servicio=s.id_servicio and x.id_descripcion_servicios=d.id_descripcion_servicios and x.id_empresa=1";
		$resultado = $this->con->consulta($sql);
		
		
		//set interno
		//$this->id_usuario = utf8_encode($row['id_usuario']);
		//$this->servicio = utf8_encode($row['servicio']);
		//$this->descripcion = utf8_encode($row['descripcion']);
		//$this->costo = utf8_encode($row['costo']);
		
		return $resultado;



		
		}
		public function crearServicio(){
			

			
		echo	$sql= "INSERT INTO servicios(id_servicio, servicio) VALUES ($this->id_servicio,'$this->$descripcion')";
             
			$this->con->query($sql);
			
			return true;

			
	}
	public function crearDesServicio(){


		echo  $SQL="INSERT INTO descripcion_servicios(descripcion, id_servicio) VALUES ('$this->descripcionServicios',$this->id_servicio)";
		$this->con->insert($SQL);
			
			return true;
	}


	public function agregarServicioEmpresa(){
		echo  $SQL="INSERT INTO servicios_empresa(id_empresa, id_servicio, costo, id_descripcion_servicios, tiempo) VALUES ($this->id_empresa,$this->id_servicio,$this->costo,'$this->id_descripcion_servicios',$this->tiempo)";
		$this->con->insert($SQL);
			return true;
	}

	public function vernuevoServiciosEmpresa(){
		echo $sql="SELECT id_descripcion_servicios from descripcion_servicios where descripcion='$this->descripcionServicios' and id_servicio=$this->id_servicio";
		 
		$resultado=$this->con->consulta($sql);
		return $resultado;
	}
	

	public function agregarNuevoServicioEmpresa(){

		echo $sql1="SELECT id_descripcion_servicios from descripcion_servicios where descripcion='$this->descripcionServicios' and id_servicio=$this->id_servicio";
		 
		$resultado=$this->con->consulta($sql1);
		$row = mysql_fetch_array($resultado);
		$numero= $row[0];

		echo $numero;

		
		echo  $SQL="INSERT INTO servicios_empresa(id_empresa, id_servicio, costo, id_descripcion_servicios, tiempo) VALUES ($this->id_empresa,$this->id_servicio,$this->costo,$numero,$this->tiempo)";
		$this->con->insert($SQL);


			return true;
	}


	public function verServiciosEmpresa(){
		echo $sql ="SELECT d.descripcion, x.id_servicios_empresa from descripcion_servicios d,servicios_empresa x WHERE x.id_descripcion_servicios=d.id_descripcion_servicios and x.id_servicio=$this->id_servicio";

		$resultado=$this->con->consulta($sql);
		return $resultado;
	}
	public function actualizarServicioEmpresa(){
		echo  $SQL="UPDATE servicios_empresa SET  costo =$this->costo, tiempo=$this->tiempo where id_servicios_empresa=$this->id_servicios_empresa"; 
		$this->con->update($SQL);
			return true;
	}

public function editarServicio(){
			echo	$sql = "UPDATE `servicios` SET `servicio`='$this->$descripcion' WHERE id_servicio="+$this->$id_servicio;
			
				$this->con->query($sql);
				
				}
}




?>