<?php


class Conexion extends MySQLi{
		//constructor de conexion
		public function __construct(){
			//constructor de mysql con la conexion
		parent::__construct('localhost','alejan14_style','style16','alejan14_style');//sitio
		//parent::__construct('localhost','root','','style');//local
		#Establece el charset para consultas
		$this->query("SET NAMES 'utf-8';");
		#Devuelve la respuesta de la conexion
		$error=mysqli_connect_errno() ? die('Error con la conexión'.mysqli_connect_error()): $x = 'Conectado';
		#borra la respuesta para liberar memoria
		unset($x);
		$this->Miconexion = mysqli_connect('localhost','alejan14_style','style16','alejan14_style');
		//$this->Miconexion = mysqli_connect('localhost','root','','style');//local
	
	}


	#funcin recorrer, regresa la lista de la consulta
	public function recorrer($y){
		return mysqli_fetch_array($y);
	}

    #consulta simple para insertar o actualizar sin devolver errores.
	public function consultaS($sql){
	mysqli_query($this->Miconexion,$sql);

}

  #regresa una respuesta de la consulta.
public function consultaR($sql){
	

	$consulta = mysqli_query($this->Miconexion,$sql);

  return $consulta;


	}
	
	
	
	#regresa una respuesta de la consulta al igual que consultar R;
	 public function consulta($consulta){ 
    $resultado = mysqli_query($this->Miconexion,$consulta);

    
    return $resultado;
  }

  #regresa una respuesta de la consulta con error de update.
  public function update($update)
  {
    $actualizacion=mysqli_query($this->Miconexion,$update);
    if(!$actualizacion){ 
      echo 'MySQL Error: ' . mysql_error();
      exit;
    }

    return $actualizacion;
  }

  #regresa la respuesta o error al insertar en la base de datos.
  public function insert($insert)
  {
    $insercion=mysqli_query($this->Miconexion,$insert);
    if(!$insercion){ 
      echo 'MySQL Error: ' . mysql_error();
      exit;
    }

    return $insercion;
  }
	}
 ?>