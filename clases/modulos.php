<?php
include_once('../../clases/conexion.php');

class modulo
{
//atributos
private $id_modulo;
private $id_usuario;
private $id_empresa;
private $empleado;
private $modulo;


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

    //Con esta funcion se pueden ver los modulos, identificcador y descripcion
    public function ver(){

		$sql = "SELECT `id_modulo`,`descripcion` FROM `modulo`";
		$resultado = $this->con->consulta($sql);
		
		return $resultado;
	}
    //Con esta funcion se guarda el modulo o modulos correspondientes a un usuario
    public function insertar(){

		$sql = "INSERT INTO `modulo_usuario`(`id_modulo`, `id_usuario`) VALUES $this->id_modulo,$this->id_usuario)";
		$resultado = $this->con->consulta($sql);
		
		return $resultado;
	}
	    //Con esta funcion se ven los empleados de la empresa

	public function empleado(){

		$sql = "SELECT `id_usuario`,`nombre_usuario`,`apellido_p`,`apellido_m` FROM `usuarios` WHERE `id_empresa`=$this->id_empresa";
		$resultado = $this->con->consulta($sql);
		
		return $resultado;
	}
 //Con esta funcion se agregan los modulos a cada usuario
	public function insert(){

		echo $sql3 = "SELECT * FROM `modulo_usuario` WHERE `id_modulo`=$this->modulo, `id_usuario`=$this->empleado";
		$r = $this->con->consulta($sql3);

		$row = mysqli_fetch_array($r);
		$numero= $row[0];

		 if($numero==null){
		

		echo $sql = "INSERT INTO `modulo_usuario`(`id_modulo`, `id_usuario`) VALUES ($this->modulo,$this->empleado)";
		$resultado = $this->con->insert($sql);
		 }
		return $resultado;
	}


}
?>