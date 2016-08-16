<?php
include_once('../../clases/compras.php');
include_once('../../clases/usuario.php');




class ControladorC{

	public function __construct(){
		
	$this->compra=new Compra();
		
		
		}
	
	public function index($estetica){
		
		$resultado=$this->compra->listaP($estetica);
		return $resultado;
		
		}
		
		
		
public function crearp($nombre_empresa,$contacto,$banco,$clabe,$nom_tcuenta,$rfc,$no_cuenta,$id_empresa,$nombre_calle,$no_int,$no_ext,$id_municipio,$colonia,$telefono,$telcasa,$cp,$emial,$facebook,$twitter,$instagram){
		
             
			$this->compra ->set("nombre_empresa",$nombre_empresa);
			$this->compra->set("contacto",$contacto);
			$this->compra->set("banco",$banco);
			$this->compra->set("clabe",$clabe);
			$this->compra->set("nom_tcuenta",$nom_tcuenta);
			$this->compra->set("rfc",$rfc);
			$this->compra->set("no_cuenta",$no_cuenta);
			$this->compra->set("id_empresa",$id_empresa);
			$this->compra->set("nombre_calle",$nombre_calle);
			$this->compra->set("no_int",$no_int);
			$this->compra->set("no_ext",$no_ext);
		    $this->compra->set("id_municipio",$id_municipio);
			$this->compra->set("colonia",$colonia);
			$this->compra->set("telefono",$telefono);
			$this->compra->set("telcasa",$telcasa);
		    $this->compra->set("cp",$cp);
			$this->compra->set("email",$email);
			$this->compra->set("Facebook",$facebook);
			$this->compra->set("twitter",$twitter);
			$this->compra->set("instagram",$instagram);
		    $resultado=$this->compra->insertP();
			return $resultado;
			
		
		}
		
		
	
		
	 
		
		
		public function editarE($nombre_empresa,$contacto,$banco,$clabe,$nom_tcuenta,$rfc,$no_cuenta,$nombre_calle,$no_int,$no_ext,$id_municipio,$colonia,$telefono,$telcasa,$cp,$emial,$facebook,$twitter,$instagram){
			$this->compra ->set("nombre_empresa",$nombre_empresa);
			$this->compra->set("contacto",$contacto);
			$this->compra->set("banco",$banco);
			$this->compra->set("clabe",$clabe);
			$this->compra->set("nom_tcuenta",$nom_tcuenta);
			$this->compra->set("rfc",$rfc);
			$this->compra->set("no_cuenta",$no_cuenta);
			$this->compra->set("nombre_calle",$nombre_calle);
			$this->compra->set("no_int",$no_int);
			$this->compra->set("no_ext",$no_ext);
		    $this->compra->set("id_municipio",$id_municipio);
			$this->compra->set("colonia",$colonia);
			$this->compra->set("telefono",$telefono);
			$this->compra->set("telcasa",$telcasa);
		    $this->compra->set("cp",$cp);
			$this->compra->set("email",$email);
			$this->compra->set("Facebook",$facebook);
			$this->compra->set("twitter",$twitter);
			$this->compra->set("instagram",$instagram);;

            $resultado=$this->compra->editarP();
			return $resultado;
			
		}	
		
		
			
		public function verP($id_proveedor){
			$this->compra->set("id_proveedor",$id_proveedor);
		$resul=$this->compra->verP();
			
		  return $resul;
			
		}
		

}

?>