<?php
include_once('conexion.php');

class Compra
{
//Atributos
private $id_provedor;
private $nombre_empresa;
private $contacto;
private $banco;
private $clabe;
private $nom_tcuenta;
private $rfc;
private $no_cuenta;
private $id_empresa;
private $nombre_calle;
private $no_int;
private $no_ext;
private $id_municipio;
private $id_estado;
private $colonia;
private $telefono;
private $telcasa;
private $cp;
private $emial;
private $facebook;
private $twitter;
private $instagram;
	
	//metodos
//Constructor de la clase
public function __construct(){
		$this->con = new Conexion();	
}


   //set establece el valor de las variables

    public function set($atributo, $contenido){
	$this->$atributo = $contenido;
	}	
//get obtiene el valor de las variables
	public function get($atributo){
	return $this->$atributo;
	}

//funcion para listar provedores
  public function listaP($estetica){
	  $sql="Select p.*,e.nombre From proveedores p, empresas e where p.id_empresa=".$estetica." and e.id_empresa=".$estetica." ";
	  $resultado = $this->con->consultaR($sql);
		
		return $resultado;
	  }

 
//funcion para insertar  
     public function insertP(){
 $sql="INSERT INTO `proveedores` (nombre_empresa, contacto, banco, clabe, nom_tcuenta, rfc, no_cuenta, id_empresa, `nombre_calle, no_ext, no_int, id_municipio, colonia, telefono, telcasa, cp, email, facebook,twitter, instagram) VALUES ('$this->nombre_empresa', '$this->contacto', '$this->banco', '$this->clabe', '$this->nom_tcuenta, '$this->rfc', '$this->no_cuenta', '$this->id_empresa', '$this->nombre_calle', '$this->no_ext', '$this->no_int', '$this->id_municipio', '$this->colonia', '$this->telefono', '$this->telcasa', '$this->cp', '$this->email', '$this->facebook', '$this->twitter', '$this->instagram'); ";		
  $this->con->query($sql); 
		 
		 
		 return true;
		 }
//funcion para editar provedores
public function editarP(){
$sql="UPDATE proveedores SET nombre_empresa='$this->nombre_empresa', contacto='$this->contacto', banco='$this->banco',  cable='$this->clabe', nom_tcuenta='$this->nom_tcuenta' , rfc='$this->rfc', no_cuenta='$this->no_cuenta',
 nombre_calle='$this->nombre_calle',no_ext='$this->no_ext',no_int='$this->no_int', id_municipio='$this->id_municipio',colonia='$this->colonia',telefono='$this->telefono',telcasa='$this->telcasa',cp='$this->cp',email= '$this->email', facebook='$this->facebook', twitter=$this->twitter',instagram='$this->instagram'";	
 $this->con->query($sql); 
  	 
	 
	 }

 
//funcion obtener datos de usuario
        
	public function verP(){
	echo	$sql="SELECT p.*, e.descripcion_estados , r.nombre,m.descripcion_municipios from proveedores p, estados e, empresas r, municipios m WHERE p.id_empresa=r.id_empresa and p.id_municipio=m.id_municipio and m.id_estado=e.id_estado and p.id_proveedor=".$this->id_proveedor;
		$resul = $this->con->consultaR($sql);
        $row=mysqli_fetch_assoc($resul) ;
		

$this->nombre_empresa = $row['nombre_empresa'];
$this->contacto = $row['contacto'];
$this->banco = $row['banco'];
$this->clabe = $row['clabe'];
$this->nom_tcuenta = $row['nom_tcuenta'];
$this->rfc = $row['rfc'];
$this->no_cuenta = $row['no_cuenta'];
$this->id_empresa= $row['nombre'];
$this->nombre_calle = $row['nombre_calle'];
$this->no_int = $row['no_int'];
$this->no_ext= $row['no_ext'];
$this->id_municipio=$row['descripcion_municipios'];
$this->id_estado = $row['descripcion_estados'];
$this->colonia = $row['colonia'];
$this->telcasa =$row['telcasa'];
$this->telefono =$row['telefono'];
$this->cp = $row['cp'];
$this->email = $row['email'];
$this->facebook = $row['facebook'];
$this->twitter = $row['twitter'];
$this->instagram= $row['instagram'];
return $row;
		
		

		}

}

?>