<?php
include_once('../../clases/conexion.php');

class Usuario
{
//atributos

private $id_usuario;
private $nombre_u;
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
private $id_tipo_usuario;
private $id_estatus;
private $id_empresa;
private $id_ciudad;
private $id_municipio;
private $id_estado;
private $nombre_calle;
private $no_int;
private $no_ext;
private $con;
private $usuario_r;
private $descripcion_red; 




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
	
	public function vermunicipio($estado){
		$sql ="Select * FROM municipios where id_estado=".$estado;
		$res=$this->con->consultaR($sql);
		return $res;
		}
	
	public function verciudades($municipio){
		$sql ="Select * FROM ciudades where id_municipio=".$municipio;
		$res=$this->con->consultaR($sql);
		return $res;
	}
	
	
	
	public function verredes(){
		$sql ="SELECT usuarios.id_usuario,redes_usuario.usuario_r,tipo_redes_sociales.descripcion_red_social from redes_usuario,tipo_redes_sociales,usuarios where redes_usuario.id_tipo_red_social=tipo_redes_sociales.id_tipo_red_social and usuarios.id_usuario=redes_usuario.id_usuario and usuarios.id_usuario=".$this->id_usuario;
		$result = $this->con->consultaR($sql);
		return $result;
		
		$row =mysqli_fetch_assoc($result) ;
		
		
		//set interno
		$this->usuario_r = $row['usuario_r'];
		$this->descripcion_red = $row['descripcion_red_social'];
		return $row;
	}
	
	
	public function listar(){

$sql = ("SELECT usuarios.id_usuario, usuarios.nombre_u, usuarios.apellido_p,usuarios.apellido_m,usuarios.telefono,empresas.nombre From usuarios,empresas ORDER by nombre_u ASC");
	
		$resultado = $this->con->consultaR($sql);
		return $resultado;
		
		
		
		}


		
		public function ver(){
	
		$sql = ("SELECT usuarios.id_usuario, usuarios.nombre_u,usuarios.apellido_p,usuarios.apellido_m,sexo.descripcion,usuarios.fecha_nacimiento, usuarios.email,usuarios.telefono,usuarios.usuario,tipo_usuarios.descripcion_tipo_usuarios, estatus.descripcion_estatus,empresas.nombre,usuarios.nombre_calle,usuarios.no_int,usuarios.no_ext,estados.descripcion_estados,ciudades.descripcion_ciudades, municipios.descripcion_municipios From usuarios,sexo,empresas,estatus,municipios,ciudades,tipo_usuarios,estados WHERE usuarios.sexo=sexo.id_sexo and usuarios.id_tipo_usuario=tipo_usuarios.id_tipo_usuario and usuarios.id_estatus=estatus.id_estatus and usuarios.id_empresa=empresas.id_empresa and usuarios.id_estado=estados.id_estado and municipios.id_estado=estados.id_estado and usuarios.id_ciudad=ciudades.id_ciudad  and usuarios.id_usuario =".$this->id_usuario);
		$resul = $this->con->consultaR($sql);
	
		$row =mysqli_fetch_assoc($resul) ;
		
		
		//set interno
		$this->id_usuario = $row['id_usuario'];
		$this->nombre = $row["nombre_u"];
		$this->apellido_p = $row["apellido_p"];
		$this->apellido_m = $row["apellido_m"];
		$this->sexo = $row["descripcion"];
	    $this->fecha_nacimiento = $row["fecha_nacimiento"];
		$this->email = $row["email"];
		$this->usuario = $row["usuario"];
	    $this->id_tipo_usuario = $row['descripcion_tipo_usuarios'];
		$this->id_estatus = $row["descripcion_estatus"];
		$this->id_empresa = $row["nombre"];
		$this->id_direccion= $row['nombre_calle'];
		$this->no_int = $row['no_int'];
		$this->no_ext = $row['no_ext'];
		$this->id_ciudad= $row['descripcion_ciudades'];
		$this->id_municipio=$row['descripcion_municipios'];
		$this->id_estado = $row['descripcion_estados'];
		return $row;
		
		}
		
		
		public function crearUsuario(){
			

			
			$sql= "INSERT INTO `usuarios` ( `nombre_u`, `apellido_p`, `apellido_m`, `sexo`, `fecha_nacimiento`,  `telefono`,`email`, `id_empresa`,`id_tipo_usuario`, `id_estatus`,`id_estado`,`id_ciudad`,`nombre_calle`,`no_int`, `no_ext`,`usuario`,`password`) VALUES ('$this->nombre_u','$this->apellido_p', '$this->apellido_m',$this->sexo,'$this->fecha_nacimiento', $this->telefono
 , '$this->email',$this->id_empresa, $this->id_tipo_usuario, $this->id_estatus,$this->id_estado,$this->id_ciudad,'$this->nombre_calle',$this->no_int,$this->no_ext,'$this->usuario','$this->password'); ";
  
			$this->con->query($sql);
			
			return true;

			
	}		
			
			public function eliminar(){
				$sql = "DELETE FROM usuarios WHERE id_usuario=".$this->id_usuario;
				$this->con->query($sql);				
				}
				
				public function editar(){
				$sql = "UPDATE usuarios SET nombre = '".$this->nombre."', apellido_p = '".$this->apellido_p."', apellido_m = '".$this->apellido_m."', sexo= '".$this->sexo."', fecha_nacimiento = '".$this->fecha_nacimiento."', foto = '".$this->foto."', email = '".$this->email."', telefono = '".$this->telefono."', observaciones = '".$this->observaciones."12', usuario = '".$this->usuario."', password = '".$this->password."', id_redes =".$this->id_redes.",  id_estatus=".$this->id_estatus.", id_empresa=".$this->id_empresa." WHERE id_usuario = ".$this->id_usuario;
				
				$this->con->query($sql);
				
				}
			
	
}




?>