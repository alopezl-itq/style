<?php
include_once('../../clases/conexion.php');
include_once('../../clases/usuario.php');

class Empleado extends Usuario
{
//atributos

private $id_usuario;
private $nombre_usuario;
private $apellido_p;
private $apellido_m;
private $sexo;
private $fecha_nacimiento;
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
private $Facebook;
private $twitter;
private $instagram;
private $id_tipo_red_social;
private $comisiones;
private $sueldo_base;
private $fecha_inicio;
private $fecha_final;
private $nom_empresa_foranea;
private $nombre_curso;
private $costo;
private $apoyo;
private $id_tipo_curso;
private $imparte;
private $usu;
private $cp;


//metodos
//Constructor de la clase

public function __construct(){
		$this->con = new Conexion();
		$this->usu = new Usuario();
	}

//funciones getter y setter

public function set($atributo, $contenido){
	$this->$atributo = $contenido;
	}	
	
	public function get($atributo){
	return $this->$atributo;
	}


//funcion para ver las empresas
  public function verem(){
return  $this->usu->verempresas();
	}
	
	
//funcion para ver los tipos de usuario	
	public function vertipous(){
		
		$sql ="SELECT * FROM tipo_usuarios WHERE id_tipo_usuario > 4";
		$resultado=$this->con->consultaR($sql);
		return $resultado;
		
		}
   
   
   //funcion para ver status
   public function verestat(){
   return  $this->usu->verestatus();
   }
   
   //funcion para ver los estados
	public function verestad(){
	return  $this->usu->verestados();
	}
	
	//funcion para ver los municipios
	
    public function vermuni($id_estado){
	return $this->usu->vermunicipio($id_estado);
	}
		

	//funcion para listar los empleados de una empresa en especifico
	public function listarE($empresa){

	$sql="	SELECT u.id_usuario, u.nombre_usuario,u.id_estatus,u.apellido_p,u.apellido_m,u.telefono,e.nombre From usuarios u,empresas e WHERE u.id_empresa=".$empresa." and e.id_empresa=".$empresa." and u.id_estatus=1 and id_tipo_usuario >4 ORDER by u.nombre_usuario ASC";
		$resultado = $this->con->consultaR($sql);
		return $resultado;
		
		
		
		}
	//funcion para listar los empleados deactivados de una empresa en especifico	

	public function listarDesactivadosE($empresa){

		$sql = "SELECT u.id_usuario, u.nombre_usuario,u.id_estatus,u.apellido_p,u.apellido_m,u.telefono,e.nombre From usuarios u,empresas e WHERE u.id_empresa=".$empresa." and e.id_empresa=".$empresa." and u.id_estatus=2 ORDER by u.nombre_usuario ASC";

		$resultado = $this->con->consultaR($sql);
		return $resultado;



	}

//funcion para ver los datos de un empleado
		
		public function verE(){
	
		$sql = ("SELECT u.*, s.descripcion, e.descripcion_estados,t.descripcion_estatus, p.descripcion_tipo_usuarios, r.nombre,m.descripcion_municipios ,d.comisiones,d.sueldo_base from usuarios u, sexo s, estados e, estatus t, tipo_usuarios p, empresas r, municipios m ,sueldos d, redes_usuario i WHERE u.sexo=s.id_sexo and u.id_estatus=t.id_estatus and u.id_tipo_usuario= p.id_tipo_usuario and u.id_empresa=r.id_empresa and u.id_municipio=m.id_municipio and m.id_estado=e.id_estado and d.id_usuario=u.id_usuario  and u.id_usuario=".$this->id_usuario);
		$resul = $this->con->consultaR($sql);
	
		$row =mysqli_fetch_assoc($resul) ;
		
		
		//set interno
		$this->id_usuario = $row['id_usuario'];
		$this->nombre_usuario = $row['nombre_usuario'];
		$this->apellido_p = $row['apellido_p'];
		$this->apellido_m = $row['apellido_m'];
		$this->sexo = $row['descripcion'];
	    $this->fecha_nacimiento = $row['fecha_nacimiento'];
		$this->email = $row['email'];
		$this->usuario = $row['usuario'];
	    $this->id_tipo_usuario = $row['descripcion_tipo_usuarios'];
		$this->id_estatus = $row['descripcion_estatus'];
		$this->id_empresa = $row['nombre'];
		$this->id_direccion= $row['nombre_calle'];
		$this->no_int = $row['no_int'];
		$this->no_ext = $row['no_ext'];
		$this->colonia= $row['colonia'];
		$this->id_municipio=$row['descripcion_municipios'];
		$this->id_estado = $row['descripcion_estados'];
		$this->cp = $row['cp'];
		$this->comisiones = $row['comisiones'];
		$this->sueldo_base =$row['sueldo_base'];
	    return $row;
			
		}
		
		
		
		
	//funcion para crear los empleados	
		public function crearE(){
		 //consulta para verificar que no se repita usuario y email
		 $sql2=("SELECT usuario,email FROM usuarios WHERE usuario='".$this->usuario."' and email='$this->email'");
            
            $resultado = $this->con->consultaR($sql2);			
	       $numregistros=mysqli_num_rows($resultado); 	   
		    
       
//si el numero de registros es igual a cero realiza el insert del usuario
            if($numregistros == 0 )
            {
		 


$sql= "INSERT INTO `usuarios` ( `nombre_usuario`, `apellido_p`, `apellido_m`, `sexo`, `fecha_nacimiento`,  `telefono`,`email`, `id_empresa`,`id_tipo_usuario`, `id_estatus`,`id_municipio`,`colonia`,`nombre_calle`,`no_int`, `no_ext`,cp,`usuario`,`password`) VALUES ('$this->nombre_usuario','$this->apellido_p', '$this->apellido_m',$this->sexo,'$this->fecha_nacimiento', $this->telefono
 , '$this->email',$this->id_empresa,$this->id_tipo_usuario,1,$this->id_municipio,'$this->colonia','$this->nombre_calle',$this->no_int,$this->no_ext,$this->cp,'$this->usuario','$this->password'); ";
  $this->con->query($sql);
  
  //consulta para obtener el id del ultimo registro obtenido 
 $sql4 ="SELECT id_usuario From usuarios where email ='".$this->email."' and  usuario='".$this->usuario."' ";
 $id_usuariores = $this->con->consultaR($sql4);
  $rowus =mysqli_fetch_assoc($id_usuariores) ;
	$id_usuario1=$rowus['id_usuario'];	
	
   //consulta para insertar sueldos
   $sql3="INSERT INTO Sueldos (id_usuario,comisiones,sueldo_base) values
   ($id_usuario1,$this->comisiones,$this->sueldo_base); ";
      $this->con->query($sql3);
	  
	  
	 
	 //Consultas para  insertar los datos de redes de SQL5 a SQL7
     $sql5="INSERT INTO redes_usuario (id_usuario,id_tipo_red_social,usuario_r) values
      ($id_usuario1,1,'$this->Facebook') ";
      $this->con->query($sql5);
	  
	 $sql6="INSERT INTO redes_usuario (id_usuario,id_tipo_red_social,usuario_r) values
      ($id_usuario1,2,'$this->twitter') ";
      $this->con->query($sql6);
	 
	  $sql7="INSERT INTO redes_usuario (id_usuario,id_tipo_red_social,usuario_r) values
      ($id_usuario1,3,'$this->instagram') ";
      $this->con->query($sql7);
      return true;
			}else{
				echo "El usuario ya existe y/o el correo ya están registrados";
				}
			}
			
			//funcion para desactivar Empleados	
			public function desactivarE(){
				$sql = "UPDATE usuarios SET id_estatus=".$this->id_estatus." WHERE id_usuario=".$this->id_usuario;
                 $this->con->query($sql);
			}
             //funcion para editar el empleado    				
				public function editarEmpleado(){
				$sql = "UPDATE `usuarios` SET `nombre_usuario` = '$this->nombre_usuario', `apellido_p` = '$this->apellido_p', `apellido_m` = '$this->apellido_m', `sexo` = '$this->sexo', `fecha_nacimiento` = '$this->fecha_nacimiento', `email` = '$this->email', `telefono` = '$this->telefono', `usuario` = '$this->usuario', `password` = '$this->password', `id_tipo_usuario` = $this->id_tipo_usuario,  `nombre_calle` = '$this->nombre_calle', `no_ext` = '$this->no_ext', cp = $this->cp, `no_int` = '$this->no_int', `id_municipio` = '$this->id_municipio', `colonia` = '$this->colonia' WHERE `usuarios`.`id_usuario` = '$this->id_usuario'";
$this->con->query($sql);
				
				//funcion para editar suledo y comisiones 
				$sql1="Update sueldos SET comisiones = $this->comisiones, sueldo_base = $this->sueldo_base where 
				sueldos.id_usuario= $this->id_usuario";
				$this->con->query($sql1);

//funciones de editar redes social de sql2 a sl4 				
$sql2="Update redes_usuario SET usuario_r ='$this->Facebook' where redes_usuario.id_usuario = '$this->id_usuario' and redes_usuario.id_tipo_red_social=1";
$this->con->query($sql2);
				
$sql3="Update redes_usuario SET usuario_r ='$this->twitter' where redes_usuario.id_usuario = '$this->id_usuario' and redes_usuario.id_tipo_red_social=2";
$this->con->query($sql3);
			
$sql4="Update redes_usuario SET usuario_r ='$this->instagram' where redes_usuario.id_usuario = '$this->id_usuario' and redes_usuario.id_tipo_red_social=3";
$this->con->query($sql4);
				
				
				}
				
	//funciones para ver los datos de redes sociales		
     public function verredes($id_usuario){
 $sql ="SELECT u.id_usuario,r.usuario_r,t.descripcion_red_social from redes_usuario r,tipo_redes_sociales t,usuarios u where r.id_tipo_red_social=t.id_tipo_red_social and u.id_usuario=r.id_usuario and u.id_usuario and u.id_usuario=".$id_usuario;
		$result = $this->con->consultaR($sql);
		return $result;
}


 //funciones para ver los tipos de cursos
      public function vertipoCu(){
		$sql ="SELECT * FROM tipo_curso";
		$res=$this->con->consultaR($sql);
		return $res;
		}

//funcion para listar los cursos tomados del usuario
  public function listarCursos(){
	 $sql= "select c.*,t.descripcion_curso  From cursos_tomados c,tipo_curso t, usuarios u  where c.id_tipo_curso=t.id_tipo_curso and c.id_usuario=u.id_usuario and u.id_usuario=".$this->id_usuario;
	 $result = $this->con->consultaR($sql);
   return $result;
	
	
	
	
		$row =mysqli_fetch_assoc($result) ;
		
		
		//set interno
	   $this->id_curso = $row['id_curso'];
	   $this->id_tipo_curso =$row['descripcion_curso'];
       $this->fech_ini_curso =$row['fecha_inicio'];
       $this->fech_fin_curso = $row['fecha_final'];
       $this->nom_imparte = $row['imparte'];
       $this->nombre_curso = $row['nombre_curso'];
       $this->empresa_foranea = $row['nom_empresa_foranea'];
       $this->costo = $row['costo'];
	   $this->apoyo = $row['apoyo'];
       return $row;
	 
	 
	  
	  
	  }
	  
	  //funcion para insertar cursos
	  public function crearCursos(){
		  
 $sql="INSERT  INTO cursos_tomados (id_tipo_curso,fecha_inicio,fecha_final,imparte,nombre_curso,nom_empresa_foranea,costo,apoyo,id_usuario) values ($this->id_tipo_curso,'$this->fecha_inicio','$this->fecha_final','$this->imparte','$this->nombre_curso','$this->nom_empresa_foranea',$this->costo,$this->apoyo,$this->id_usuario)";
$this->con->query($sql);

return true;
		  
		  }
		  
		  //funcios para editar curso tomado de usuarios
		  public function EditarCurso(){
		  
		  echo $sql="Upadte cursos_tomados set id_tipo_curso=$this->tipo_curso, fecha_inicio='$this->'fecha_inicio', fecha_final='$this->fecha_final',imparte='$this->imparte',nombre_curso='$this->nombre_curso', nom_empresa_foranea='$this->nom_empresa_foranea',costo = $this->costo, apoyo=$this->apoyo  where  usuario.id_usuario = cursos_tomados.id_usario and id_curso=".$this->id_curso;
		  $this->con->query($sql);
		  
		  
		  }


	
}

?>