<?php
/**
 * Created by PhpStorm.
 * User: Eed
 * Date: 30/06/2016
 * Time: 09:36 AM
 */


include_once('/../clases/conexion.php');

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
    private $cp;


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
       $sql="select u.*, a.nombre_usuario, a.apellido_p, a.apellido_m, s.descripcion_servicios from servicios_usuario u,usuarios a, servicios s WHERE u.id_usuario = a.id_usuario and u.id_cliente = $this->id_cliente and s.id_servicio=u.id_servicio";
        $resultado =$this->con->consultaR($sql);
        return $resultado;
    }
    public function verDescripcionProductos($id_s){
        $sql = 'select p.descripcion_productos, s.cantidad from productos p, productos_por_servicio s WHERE s.id_producto=p.id_productos and s.id_servicio_usuario='.$id_s;
        $resultado = $this->con->consultaR($sql);
        return $resultado;
    }

}