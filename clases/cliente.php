<?php
include_once('conexion.php');

class Cliente
{
//atributos


    private $id_empresa;
    private $id_cliente;
    private $con;
    private $suma;


//constructor

    public function __construct()
    {
        //objeto conexion
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

    //consulta los servicios de un cliente en específico para el historial
    public function verServicios(){
       $sql="SELECT u.*,e.costo, s.servicio FROM usuarios r,servicios_usuario u, servicios_empresa e, descripcion_servicios d, servicios s where u.id_servicios_empresa=e.id_servicios_empresa and e.id_descripcion_servicios=d.id_descripcion_servicios and d.id_servicio=s.id_servicio and u.id_cliente =r.id_usuario and u.id_cliente=".$this->id_cliente;
        $resultado =$this->con->consultaR($sql);
        return $resultado;

    }

    //consulta los productos usados en un servicio en específico para el historial
    public function verDescripcionProductos($id_s){
         $sql = 'SELECT p.descripcion_productos,p.presentacion ,e.precio_venta,u.* from productos p,productos_empresa e, productos_por_servicio u where u.id_servicio_usuario='.$id_s.' and p.id_productos=u.id_producto and e.id_producto = u.id_producto';
        $resultado = $this->con->consultaR($sql);
        return $resultado;
    }
    //consulta los productos de un cliente en específico para el historial
    public function verProductos(){
        $sql="SELECT p.descripcion_productos,e.precio_venta,u.* from productos_empresa e, productos p, productos_usuario u where u.id_cliente=$this->id_cliente and p.id_productos=u.id_producto and e.id_producto=u.id_producto";
        $resultado =$this->con->consultaR($sql);
        return $resultado;
    }

    //consulta el año actual
    public function calcularAnio(){
        $m=getdate();
        return $m['year'];
    }

    //calcula el total del costo de productos comprados por un cliente
    public function totalPrecioProductos($id_cliente){

        $sql = "SELECT SUM(p.precio_venta) from productos_empresa p, productos_usuario u where u.id_cliente=".$id_cliente." and p.id_producto=u.id_producto and u.fecha>='".$this->calcularAnio()."-01-01' and u.fecha<='".$this->calcularAnio()."-12-31'";
        $resultado =$this->con->consultaR($sql);
        $row = $this->con->recorrer($resultado);
        return $row;
    }

    //calcula el total de servicios adquiridos por un cliente
    public function totalPrecioServicios($id_cliente){
        $sql = "SELECT SUM(e.costo) FROM usuarios r,servicios_usuario u, servicios_empresa e, descripcion_servicios d, servicios s where u.id_servicios_empresa=e.id_servicios_empresa and e.id_descripcion_servicios=d.id_descripcion_servicios and d.id_servicio=s.id_servicio and u.id_cliente =r.id_usuario and u.fecha_servicio>='".$this->calcularAnio()."-01-01' and u.fecha_servicio<='".$this->calcularAnio()."-12-31' and u.id_cliente=".$id_cliente;
        $resultado =$this->con->consultaR($sql);
        $row = $this->con->recorrer($resultado);
        return $row;
    }

    //calcula el raking del usuario (A,AA,AAA,Premium)
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