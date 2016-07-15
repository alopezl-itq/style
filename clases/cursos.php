<?php
include_once('../../clases/conexion.php');

class cursos
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


public function vercursos(){
	$sql ="Select * FROM cursos";
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
	$sql ="SELECT  u.nombre_usuario, u.apellido_p, u.apellido_m FROM usuarios u WHERE  u.id_tipo_usuario =4";
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
		$_GET['id'];
		$sql = ("SELECT * from cursos where id_curso =".$_GET['id']);
		$resul = $this->con->consultaR($sql);
		$row =mysqli_fetch_assoc($resul) ;
		
		
		//set interno
		$this->id_curso = $row['id_curso'];
		$this->descripcion_cursos = $row['descripcion_cursos'];
		$this->fecha_inicio = $row["fecha_inicio"];
		$this->fecha_final = $row["fecha_final"];
		$this->imparte = $row["imparte"];
		$this->nombre_curso = $row["nombre_curso"];
		$this->foranea = $row["nom_empresa_foranea"];
		$this->archivo = $row["archivo"];
		
		
		return $row;
		}
		
		
		public function crear(){
			

			
			 $sql= "INSERT INTO `cursos` (`id_curso`, `descripcion_cursos`, `fecha_inicio`, `fecha_final`, `imparte`, `nombre_curso`, `nom_empresa_foranea`, `archivo`) VALUES (NULL, '$this->descripcion', '$this->fecha_inicio', '$this->fecha_final','$this->imparte', '$this->nombre_curso', '$this->empresa', '$this->archivo'); ";
			//$this->con->query($sql);
			//$conexion=mysqli_connect('localhost','desarrollo','style16','style') or die(mysql_error());
			$conexion=mysqli_connect('localhost','alejan14_style','style16','alejan14_style') or die(mysql_error());
			
			if ($conexion->connect_error) {
					die("Connection failed: " . $conn->connect_error);
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
				
				public function editar(){
				$sql = "UPDATE cursos SET descripcion_cursos = '".utf8_decode($_POST['descripcion'])."', fecha_inicio= '".$_POST['fecha_inicio']."', fecha_final= '".$_POST['fecha_final']."', imparte= '".$_POST['imparte']."', nombre_curso = '".$_POST['nombre_curso']."', nom_empresa_foranea = '".$_POST['empresa']."' WHERE id_curso = ".$_POST['id_curso']."";
				
				//$this->con->query($sql);
				
			//$conexion=mysqli_connect('localhost','desarrollo','style16','style') or die(mysql_error());
			$conexion=mysqli_connect('localhost','alejan14_style','style16','alejan14_style') or die(mysql_error());
			
			if ($conexion->connect_error) {
					die("Connection failed: " . $conexion>connect_error);
			} 
			
			if ($conexion->query($sql) === TRUE) {
						header("location:index.php");
			}else {
				echo "Error: " . $sql . "<br>" . $conexion->error;
			}
			
				
				}
			
	
}




?>