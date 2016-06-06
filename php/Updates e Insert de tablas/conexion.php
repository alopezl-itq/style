<?php 

class Conexion{
  private $conexion; private $total_consultas;
  public function Conexion(){ 
    if(!isset($this->conexion)){
      $this->conexion = (mysql_connect('localhost','alejan14_style','style16'))
      //$this->conexion = (mysql_connect("localhost","root",""))
        or die(mysql_error());
      mysql_select_db("alejan14_style",$this->conexion) or die(mysql_error());
      //mysql_select_db("style",$this->conexion) or die(mysql_error());
    }
  }
  public function consulta($consulta){ 
    $this->total_consultas++; 
    $resultado = mysql_query($consulta,$this->conexion);
    if(!$resultado){ 
      echo 'MySQL Error: ' . mysql_error();
      exit;
    }
    return $resultado;
  }
  
  public function update($update)
  {
    $actualizacion=mysql_query($update,$this->conexion);
    if(!$actualizacion){ 
      echo 'MySQL Error: ' . mysql_error();
      exit;
    }
    return $actualizacion;
  }
  
  public function insert($insert)
  {
    $insercion=mysql_query($insert,$this->conexion);
    if(!$insercion){ 
      echo 'MySQL Error: ' . mysql_error();
      exit;
    }
    return $insercion;
  }
  public function fetch_array($consulta){
   return mysql_fetch_array($consulta);
  }
  public function num_rows($consulta){
   return mysql_num_rows($consulta);
  }
  public function getTotalConsultas(){
   return $this->total_consultas; 
  }
}?>