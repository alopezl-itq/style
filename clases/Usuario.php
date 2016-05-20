<?php
include_once('../../clases/conexion.php');

class Usuario
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
		
		$sql = ("Select usuarios.id_usuario, usuarios.nombreU, usuarios.apellido_p, usuarios.apellido_m, usuarios.sexo, usuarios.fecha_nacimiento,usuarios.foto, usuarios.email,usuarios.telefono,usuarios.observaciones, usuarios.usuario, usuarios.password, redes.id_red_social, tipo_usuarios.descripcion_tipo_usuarios,estatus.descripcion_estatus,empresas.nombre, direcciones.nombre_calle, direcciones.no_int, direcciones.no_ext, ciudades.descripcion_ciudades, municipios.descripcion_municipios, estados.descripcion_estados FROM usuarios,redes,tipo_usuarios,estatus,empresas,direcciones,ciudades,municipios,estados where usuarios.id_red=redes.id_red_social and usuarios.id_tipo_usuario=tipo_usuarios.id_tipo_usuario and usuarios.id_estatus=estatus.id_estatus and usuarios.id_empresa=empresas.id_empresa and usuarios.id_direccion=direcciones.id_direccion and direcciones.id_ciudad=ciudades.id_ciudad and ciudades.id_municipio=municipios.id_municipio and municipios.id_estado=estados.id_estado
		and usuarios.id_usuario = ".$this->id_usuario);
		$resul = $this->con->consultaR($sql);
		$row =mysqli_fetch_assoc($resul) ;
		
		
		//set interno
		$this->id_usuario = $row['id_usuario'];
		$this->nombre = $row['nombreU'];
		$this->apellido_p = $row["apellido_p"];
		$this->apellido_m = $row["apellido_m"];
		$this->sexo = $row["sexo"];
		$this->fecha_nacimiento = $row["fecha_nacimiento"];
		$this->email = $row["foto"];
		$this->foto = $row["email"];
		$this->telefono = $row["telefono"];
		$this->observaciones = $row["observaciones"];
		$this->usuario = $row["usuario"];
		$this->password = $row["password"];
	    $this->id_redes = $row['id_red_social'];
		$this->id_tipo_usuario = $row['descripcion_tipo_usuarios'];
		$this->id_estatus = $row["descripcion_estatus"];
		$this->id_empresa = $row["nombre"];
		$this->id_direccion= $row['nombre_calle'];
		$this->id_direccion = $row['no_int'];
		$this->id_direccion = $row['no_ext'];
		$this->id_ciudad= $row['descripcion_ciudades'];
		$this->id_municipio=$row['descripcion_municipios'];
		$this->id_estado = $row['descripcion_estados'];
		return $row;
		}
		
		
		public function crear(){
			

			
			$sql= "INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido_p`, `apellido_m`, `sexo`, `fecha_nacimiento`, `foto`, `email`, `telefono`, `observaciones`, `usuario`, `password`, `id_tipo_usuario`, `id_estatus`, `id_empresa`, `nombre_calle`, `no_ext`, `no_int`, `id_estado`) VALUES (NULL, '$this->nombre', '$this->apellido_p', '$this->apellido_m',
 '$this->sexo', '$this->fecha_nacimiento', '$this->foto', '$this->email', '$this->telefono', '$this->observaciones', '$this->usuario', '$this->password', '$this->id_tipo_usuario', '$this->id_estatus', '$this->id_empresa', '$this->nombre_calle', '$this->no_ext', '$this->no_int', '$this->id_estado'); ";
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