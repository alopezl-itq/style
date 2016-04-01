<?php

include_once('/xampp/htdocs/POO/clases/Conexion.php');

class Departamentos
{
//atributos

private $dept;
private $dname;
private $loc;


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

   public function listaD(){
		$sql = " Select * From dep ";
		$resultado = $this->con->query($sql);
		return $resultado;   
   }

}

?>