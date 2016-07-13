<?php
/**
 * Created by PhpStorm.
 * User: Eed
 * Date: 30/06/2016
 * Time: 09:36 AM
 */


include_once('conexion.php');

class Cliente
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
    private $id_cliente;
    private $colonia;
    private $id_municipio;
    private $id_estado;
    private $nombre_calle;
    private $no_int;
    private $no_ext;
    private $con;
    private $usuario_r;
    private $descripcion_red;
    private $suma;


//metodos

    public function __construct()
    {
        $this->con = new Conexion();
    }

    public function set($atributo, $contenido){
        $this->$atributo = $contenido;
    }

    public function get($atributo){
        return $this->$atributo;
    }


    public function verServicios(){
       $sql="SELECT u.*,e.costo, s.servicio FROM usuarios r,servicios_usuari u, servicios_empresa e, descripcion_servicios d, servicios s where u.id_servicios_empresa=e.id_servicios_empresa and e.id_descripcion_servicios=d.id_descripcion_servicios and d.id_servicio=s.id_servicio and u.id_cliente =r.id_usuario and u.id_cliente=".$this->id_cliente;
        $resultado =$this->con->consultaR($sql);
        return $resultado;
    }
    public function verDescripcionProductos($id_s){
         $sql = ' SELECT p.descripcion_productos,p.presentacion ,p.precio_venta,u.* from productos p, productos_por_servicio u where u.id_servicio_usuario='.$id_s .' and p.id_productos=u.id_producto';
        $resultado = $this->con->consultaR($sql);
        return $resultado;
    }

    public function verProductos(){
        $sql="SELECT p.descripcion_productos,p.precio_venta,u.* from productos p, productos_usuario u where u.id_cliente=".$this->id_cliente." and p.id_productos=u.id_producto";
        $resultado =$this->con->consultaR($sql);
        return $resultado;
    }

    public function calcularEdad(){
        $m=getdate();
        return $m['year'];
    }

    public function totalPrecioProductos($id_cliente){

        $sql = "SELECT SUM(p.precio_venta) from productos p, productos_usuario u where u.id_cliente=".$id_cliente." and p.id_productos=u.id_producto and u.fecha>='".$this->calcularEdad()."-01-01' and u.fecha<='".$this->calcularEdad()."-12-31'";
        $resultado =$this->con->consultaR($sql);
        $row = $this->con->recorrer($resultado);
        return $row;
    }
    public function totalPrecioServicios($id_cliente){
        $sql = "SELECT SUM(e.costo) FROM usuarios r,servicios_usuari u, servicios_empresa e, descripcion_servicios d, servicios s where u.id_servicios_empresa=e.id_servicios_empresa and e.id_descripcion_servicios=d.id_descripcion_servicios and d.id_servicio=s.id_servicio and u.id_cliente =r.id_usuario and u.fecha_servicio>='2016-01-01' and u.fecha_servicio<='2016-12-31' and u.id_cliente=".$id_cliente;
        $resultado =$this->con->consultaR($sql);
        $row = $this->con->recorrer($resultado);
        return $row;
    }

    public function rakingUsuario(){
        $resP=$this->totalPrecioProductos($this->id_cliente);
        $resS=$this->totalPrecioServicios($this->id_cliente);
        $this->suma=$resP['SUM(p.precio_venta)']+$resS['SUM(e.costo)'];

         $sql="select cliente_a,cliente_b,cliente_c,cliente_d from empresas where id_empresa=".$this->id_empresa;
        $res=$this->con->consultaR($sql);
        $row=$this->con->recorrer($res);
    $this->suma;
        if($this->suma>=$row['cliente_a']&&$this->suma<$row['cliente_b']){
            return 'A';
        }elseif($this->suma>=$row['cliente_b']&&$this->suma<$row['cliente_c']){
            return 'AA';
        }
        elseif($this->suma>=$row['cliente_c']&&$this->suma<$row['cliente_d']){
            return 'AAA';
        }
        elseif($this->suma>=$row['cliente_d']){
            return 'Premium';
        }


    }
}