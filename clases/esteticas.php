<?php
include_once('../../clases/conexion.php');

class estetica
{
//atributos

private $id_usuario;
private $nombre;
private $apellido_p;
private $apellido_m;
private $sexo;
private $fecha_nacimiento;
private $foto;
private $email;
private $telefono;
private $observaciones;
private $usuario;
private $password;
private $id_redes;
private $id_tipo_usuario;
private $id_estatus;
private $id_empresa;
private $id_direccion;
private $id_ciudad;
private $id_municipio;
private $id_estado;
private $nombre_calle;
private $no_int;
private $no_ext;
private $con;
private $facebook;
private $twitter;
private $instagram;


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
	$sql ="Select * FROM empresas e, estatus c where e.id_estatus= c.id_estatus order by e.id_estatus asc";
	$res=$this->con->consultaR($sql);
	
	 
	if(!isset($res))echo "no hay no hay";
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



	public function veradministradores(){
	$sql ="SELECT  u.nombre_usuario, u.apellido_p, u.apellido_m, u.id_usuario FROM usuarios u WHERE  u.id_tipo_usuario =4";
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
		echo $sql ="Select * FROM municipios where id_estado=".$municipio;
		$res=$this->con->consultaR($sql);
		return $res;
	}
	
	public function listar(){
	$sql = "";
		$resultado = $this->con->consultaR($sql);
		return $resultado;
		
		
		
		}


		
		public function ver(){
		$_GET['id'];
		$sql = ("SELECT e.*, t.descripcion_estatus, s.descripcion_estados, m.descripcion_municipios from empresas e, estatus t, estados s, municipios m where e.id_empresa =".$_GET['id']. " and e.id_estado = s.id_estado and e.id_ciudad = m.id_municipio and e.id_estatus = t.id_estatus");
		$resul = $this->con->consultaR($sql);
		$row =mysqli_fetch_assoc($resul) ;
		
		
		//set interno
		$this->id_empresa = $row['id_empresa'];
		$this->nombre = $row['nombre'];
		$this->administrador = $row["id_usuario"];
		$this->eslogan = $row["eslogan"];
		$this->imagen = $row["imagen"];
		$this->cliente_a = $row["cliente_a"];
		$this->cliente_b = $row["cliente_b"];
		$this->cliente_c = $row["cliente_c"];
		$this->cliente_d = $row["cliente_d"];
		
		$this->estatus= $row["descripcion_estatus"];
		$this->calle = $row["calle"];
		$this->no_ext = $row["no_ext"];
		$this->no_int = $row["no_int"];
		$this->estado = $row["descripcion_estados"];
		$this->id_estado= $row["id_estado"];
	    $this->id_municipio=$row['descripcion_municipios'];
		$this->nombre;
		$this->facebook=$row['facebook'];
		$this->facebook=$row['twitter'];
		$this->facebook=$row['instagram'];
		
		return $row;
		}
		
		
		public function crear(){
			

			
			 $sql= "INSERT INTO `empresas` (`id_empresa`, `id_usuario`, `nombre`, `eslogan`, `imagen`, `cliente_a`, `cliente_b`, `cliente_c`, `cliente_d`, `id_estatus`, `calle`, `no_ext`, `no_int`, `id_estado`,`id_ciudad`,`facebook`,`twitter`,`instagram`) VALUES (NULL, NULL, '$this->nombre', '$this->eslogan', '$this->imagen',
 '$this->cliente_a', '$this->cliente_b', '$this->cliente_c', '$this->cliente_d',  '$this->id_estatus', '$this->calle', '$this->no_ext', '$this->no_int', '$this->id_estado', '1','$this->facebook','$this->twitter','$this->instagram'); ";
			//$this->con->query($sql);
			//$conexion=mysqli_connect('localhost','desarrollo','style16','style') or die(mysql_error());
			$conexion=mysqli_connect('localhost','root','','style') or die(mysqli_error());
			
			if ($conexion->connect_error) {
					die("Connection failed: " . $conexion->connect_error);
			} 
			
			if ($conexion->query($sql) === TRUE) {
				echo "New record created successfully";
			}else {
				echo "Error: " . $sql . "<br>" . $conexion->error;
			}
			
			
			//if(!$resultado_q) echo "error: ".mysql_error($resultado_q);
			
			
			return true;

			
			
			
			return true;
			
	}		
			
			public function eliminar(){
				echo $sql = "UPDATE empresas SET id_estatus='3'  WHERE id_empresa=".$_GET['id'];
				$this->con->query($sql);				
				}
				
				
//Inicia función par editar estéticas
				
				public function editar(){
				 $sql = "UPDATE empresas SET nombre = '".$_POST['nombre_estetica']."', id_usuario= '".$_POST['id_usuario']."', eslogan= '".$_POST['eslogan']."', id_estatus= '".$_POST['id_estatus']."', cliente_a = '".$_POST['cliente_a']."', cliente_b = '".$_POST['cliente_b']."', cliente_c = '".$_POST['cliente_c']."', cliente_d = '".$_POST['cliente_d']."', calle = '".$_POST['calle']."', facebook = '".$_POST['facebook']."', twitter = '".$_POST['twitter']."', instagram = '".$_POST['instagram']."', no_ext = '".$_POST['no_ext']."', no_int = '".$_POST['no_int']."', id_ciudad ='1',  id_estado='".$_POST['id_estado']."' WHERE id_empresa = '".$_POST['id_empresa']."'";
				
				//$this->con->query($sql);
				
			//$conexion=mysqli_connect('localhost','desarrollo','style16','style') or die(mysql_error());
			$conexion=mysqli_connect('localhost','alejan14_style','style16','alejan14_style') or die(mysql_error());
			
			if ($conexion->connect_error) {
					die("Connection failed: " . $conn>connect_error);
			} 
			
			if ($conexion->query($sql) === TRUE) {
				echo("aqui ando");
								//header("location:index.php");
			}else {
				echo "Error: " . $sql . "<br>" . $conexion->error;
			}
			
			return true;	
				}
				
		
			
	
}




?>