<?php 

class Pelicula_Director
{
  
  function __construct()
  {
    require_once("Conexion.php");
    $this->conexion = new Conexion();
  }


  function insertar($fk_pelicula,$fk_director){
    $consulta="INSERT INTO pelicula_director(pk_pelicula_director,fk_pelicula,fk_director)VALUES(null,'{$fk_pelicula}','{$fk_director}')";

       $resultado=$this->conexion ->query ($consulta);
       return $resultado;

  }
   function mostrar (){

    $consulta="SELECT * FROM  peliculas p INNER JOIN  pelicula_director pd ON  pd.fk_pelicula=p.pk_pelicula INNER JOIN directores ON d.pk_director=pd.fk_director";
    $resultado=$this->conexion->query($consulta);
    return $resultado;  
  }
   function mostrarPorId($pk_pelicula_director){

    $consulta="SELECT * FROM pelicula_director where pk_pelicula_director ='{$pk_pelicula_director}'";
    $resultado=$this->conexion->query($consulta);
    return $resultado;  
  }
   function baja (){
    $consulta="UPDATE pelicula_director SET estatus =0 WHERE pk_pelicula_director='{$pk_pelicula_director}'";
        $resultado=$this->conexion->query($consulta);
    return $resultado;  
  }

}


 ?>