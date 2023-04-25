<?php 


class Director
{
  
  function __construct()
  {
    require_once("Conexion.php");
    $this->conexion = new Conexion();
  }


  function insertar($nom_director){
    $consulta="INSERT INTO directores(pk_director,nom_director)VALUES(null,'{$nom_director}')";

       $resultado=$this->conexion ->query ($consulta);
       return $resultado;

  }
   function mostrar (){

    $consulta="SELECT * FROM directores";
    $resultado=$this->conexion->query($consulta);
    return $resultado;  
  }
     function mostrarPorId($pk_director){

    $consulta="SELECT * FROM directores where pk_director ='{$pk_director}'";
    $resultado=$this->conexion->query($consulta);
    return $resultado;  
  }
   function baja ($pk_director){
    $consulta="UPDATE directores SET estatus=0 WHERE pk_director='{$pk_director}'";
        $resultado=$this->conexion->query($consulta);
    return $resultado;  
  }
  function actualizar($pk_director, $nom_director){
    $consulta="UPDATE directores SET nom_director='{$nom_director}' WHERE pk_director='{$pk_director}' ";
    $resultado=$this->conexion->query($consulta);
    return $resultado;
  }

}


 ?>