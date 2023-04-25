<?php 

class Actor
{
  
  function __construct()
  {
    require_once("Conexion.php");
    $this->conexion = new Conexion();
  }


  function insertar($nom_actor){
    $consulta="INSERT INTO actores(pk_actor,nom_actor,estatus)VALUES(null,'{$nom_actor}', 1)";
       $resultado=$this->conexion ->query ($consulta);
       return $resultado;

  }
   function mostrar (){

    $consulta="SELECT * FROM actores";
    $resultado=$this->conexion->query($consulta);
    return $resultado;  
  }
    function mostrarPorId($pk_actor){

    $consulta="SELECT * FROM actores where pk_actor ='{$pk_actor}'";
    $resultado=$this->conexion->query($consulta);
    return $resultado;  
  }
   function baja($pk_actor){
    $consulta="UPDATE actores SET estatus=0 WHERE pk_actor='{$pk_actor}'";
    $resultado=$this->conexion->query($consulta);
    return $resultado;
  }
   function actualizar($pk_actor, $nom_actor){
    $consulta="UPDATE actores SET nom_actor='{$nom_actor}' WHERE pk_actor='{$pk_actor}' ";
    $resultado=$this->conexion->query($consulta);
    return $resultado;
  }

}


 ?>