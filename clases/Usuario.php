<?php
include_once('../../clases/conexion.php');

class Usuario
{
//atributos

private $id_usuario;
private $nombre_usuario;
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
private $colonia;
private $id_municipio;
private $id_estado;
private $nombre_calle;
private $no_int;
private $no_ext;
private $con;
private $usuario_r;
private $descripcion_red;
private $cp;


 




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
	$sql ="Select * FROM empresas ORDER BY id_empresa DESC";
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
		echo $sql ="Select * FROM estados";
		$res=$this->con->consultaR($sql);
		return $res;
	}
	
	public function vermunicipio($id_estado){
		 $sql ="Select * FROM municipios WHERE id_estado= ".$id_estado;
		$res=$this->con->consultaR($sql);

		return $res;
		}
	
	public function vermunicipioTodos($id_estado){
		 $sql ="Select * FROM municipios WHERE id_estado= (SELECT id_estado from estados where descripcion_estados='".$id_estado."')";
		$res=$this->con->consultaR($sql);

		return $res;
	}
	
	
	
	
	
	
	public function listar($tipo){

echo $sql = ("SELECT usuarios.id_usuario, usuarios.nombre_usuario,usuarios.id_estatus,usuarios.apellido_p,usuarios.apellido_m,usuarios.telefono,empresas.nombre From usuarios,empresas WHERE usuarios.id_empresa=empresas.id_empresa and usuarios.id_estatus=1 and id_tipo_usuario=".$tipo." ORDER by usuarios.nombre_usuario ASC ");
	
		$resultado = $this->con->consultaR($sql);
		return $resultado;
		
		
		
		}

	public function listarDesactivados($tipo){

		$sql = ("SELECT usuarios.id_usuario, usuarios.nombre_usuario,usuarios.id_estatus,usuarios.apellido_p,usuarios.apellido_m,usuarios.telefono,empresas.nombre From usuarios,empresas WHERE usuarios.id_empresa=empresas.id_empresa and usuarios.id_estatus=2 and id_tipo_usuario=".$tipo." ORDER by usuarios.nombre_usuario ASC ");

		$resultado = $this->con->consultaR($sql);
		return $resultado;



	}


		
		public function ver(){
	
		$sql = ("SELECT u.*, s.descripcion, e.descripcion_estados,t.descripcion_estatus, p.descripcion_tipo_usuarios, r.nombre,m.descripcion_municipios from usuarios u, sexo s, estados e, estatus t, tipo_usuarios p, empresas r, municipios m WHERE u.sexo=s.id_sexo and  u.id_estatus=t.id_estatus and u.id_tipo_usuario= p.id_tipo_usuario and u.id_empresa=r.id_empresa and u.id_municipio=m.id_municipio and m.id_estado=e.id_estado and u.id_usuario=".$this->id_usuario);
		$resul = $this->con->consultaR($sql);
	
		$row =mysqli_fetch_assoc($resul) ;
		
		
		//set interno
		$this->id_usuario = $row['id_usuario'];
		$this->nombre_usuario = $row["nombre_usuario"];
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
		$this->colonia= $row['colonia'];
		$this->id_municipio=$row['descripcion_municipios'];
		$this->id_estado = $row['descripcion_estados'];
		$this->cp = $row['cp'];
		return $row;
		
		}
		
		
		public function crearUsuario(){
		 
		 $sql2=("SELECT usuario,email FROM usuarios WHERE usuario='".$this->usuario."' and email='$this->email'");
            
            $resultado = $this->con->consultaR($sql2);			
	       $numregistros=mysqli_num_rows($resultado); 	   
		    
       

            if($numregistros == 0 )
            {
				$sqlempresa="SELECT MAX(id_empresa) FROM empresas";
				$rem=$this->con->consultaR($sqlempresa);
				$re=mysqli_fetch_array($rem);
		 


			echo  $sql= "INSERT INTO `usuarios` ( `nombre_usuario`, `apellido_p`, `apellido_m`, `sexo`, `fecha_nacimiento`,  `telefono`,`email`, `id_empresa`,`id_tipo_usuario`, `id_estatus`,`id_municipio`,`colonia`,`nombre_calle`,`no_int`, `no_ext`,cp,`usuario`,`password`) VALUES ('$this->nombre_usuario','$this->apellido_p', '$this->apellido_m',$this->sexo,'$this->fecha_nacimiento', $this->telefono
 , '$this->email',".$re["MAX(id_empresa)"].", $this->id_tipo_usuario,1,$this->id_municipio,'$this->colonia','$this->nombre_calle',$this->no_int,$this->no_ext,$this->cp,'$this->usuario','$this->password'); ";

			$this->con->query($sql);
			
			return true;
			}else{
				echo "El usuario ya existe y/o el correo ya están registrados";
				}
			
	}		
			
			public function desactivar(){
				$sql = "UPDATE usuarios SET id_estatus=".$this->id_estatus." WHERE id_usuario=".$this->id_usuario;

				$this->con->query($sql);
				echo $sql;
				if($sql){
					echo 'desactivado';
				}
				}
				
				public function editarUsuario(){
				$sql = "UPDATE `usuarios` SET `nombre_usuario` = '$this->nombre_usuario', `apellido_p` = '$this->apellido_p', `apellido_m` = '$this->apellido_m', `sexo` = '$this->sexo', `fecha_nacimiento` = '$this->fecha_nacimiento', `email` = '$this->email', `telefono` = '$this->telefono', `usuario` = '$this->usuario', `password` = '$this->password', `id_tipo_usuario` = '$this->id_tipo_usuario', `id_empresa` = '$this->id_empresa', `nombre_calle` = '$this->nombre_calle', `no_ext` = '$this->no_ext', cp = $this->cp, `no_int` = '$this->no_int', `id_municipio` = '$this->id_municipio', `colonia` = '$this->colonia',`formulario_lleno`=1 WHERE `usuarios`.`id_usuario` = '$this->id_usuario'";
				
				$this->con->query($sql);
				echo $sql;
				}
			
	
}

?>