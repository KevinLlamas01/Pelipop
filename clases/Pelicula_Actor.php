<?php 

class Pelicula_Actor
{
  
  function __construct()
  {
    require_once("Conexion.php");
    $this->conexion = new Conexion();
  }


  function insertar($fk_pelicula,$fk_actor){
    $consulta="INSERT INTO pelicula_actor(pk_pelicula_actor,fk_pelicula,fk_actor)VALUES(null,'{$fk_pelicula}','{$fk_actor}')";

       $resultado=$this->conexion ->query ($consulta);
       return $resultado;

  }
   function mostrar (){

    $consulta="SELECT * FROM  peliculas p INNER JOIN  pelicula_actor pa ON  pa.fk_pelicula=p.pk_pelicula INNER JOIN actores ON a.pk_actor=pa.fk_actor";
    $resultado=$this->conexion->query($consulta);
    return $resultado;  
  }
   function mostrarPorId($pk_fav){

    $consulta="SELECT * FROM pelicula_actor where pk_pelicula_actor ='{$pk_pelicula_actor}'";
    $resultado=$this->conexion->query($consulta);
    return $resultado;  
  }
   function baja (){
    $consulta="UPDATE pelicula_actor SET estatus =0 WHERE pk_pelicula_actor='{$pk_pelicula_actor}'";
        $resultado=$this->conexion->query($consulta);
    return $resultado;  
  }

}


 ?>