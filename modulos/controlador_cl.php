<?php
/**
 * Created by PhpStorm.
 * User: Eed
 * Date: 30/06/2016
 * Time: 09:33 AM
 */

include_once("/../clases/cliente.php");



class ControladorC
{

    public function __construct()
    {

        $this->cliente = new Cliente();

    }

    public function verServicios($id_cliente){

        $this->cliente->set("id_cliente",$id_cliente);

        $resultado = $this->cliente->verServicios();
        return $resultado;
    }
    public function verProductos($id_cliente){

        $this->cliente->set("id_cliente",$id_cliente);

        $resultado = $this->cliente->verProductos();
        return $resultado;
    }
    public function verDescripcionProductos($id_s){

        $resultado = $this->cliente->verDescripcionProductos($id_s);
        return $resultado;
    }

}