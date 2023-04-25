<?php 


class Genero
{
  
  function __construct()
  {
    require_once("Conexion.php");
    $this->conexion = new Conexion();
  }


  function insertar($nom_genero){
    $consulta="INSERT INTO genero(pk_genero,nom_genero,estatus)VALUES(null,'{$nom_genero}', 1)";
       $resultado=$this->conexion ->query ($consulta);
       return $resultado;

  }
   function mostrar (){

    $consulta="SELECT * FROM genero";
    $resultado=$this->conexion->query($consulta);
    return $resultado;  
  }
   function mostrarPorId($pk_genero){

    $consulta="SELECT * FROM genero where pk_genero ='{$pk_genero}'";
    $resultado=$this->conexion->query($consulta);
    return $resultado;  
  }
   function baja ($pk_genero){
    $consulta="UPDATE genero SET estatus =0 WHERE pk_genero='{$pk_genero}'";
        $resultado=$this->conexion->query($consulta);
    return $resultado;  
  }
  function actualizar($pk_genero, $nom_genero){
    $consulta="UPDATE genero SET nom_genero='{$nom_genero}' WHERE pk_genero='{$pk_genero}' ";
    $resultado=$this->conexion->query($consulta);
    return $resultado;
  }

}


 ?>