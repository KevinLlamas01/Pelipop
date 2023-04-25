<?php 


class Url_pelicula
{
  
  function __construct()
  {
    require_once("Conexion.php");
    $this->conexion = new Conexion();
  }


  function insertar($dato_pelicula,$fk_pelicula){
    $consulta="INSERT INTO url_pelicula(pk_url_pelicula,dato_pelicula,fk_pelicula,estatus)VALUES(null,'{$dato_pelicula}','{$fk_pelicula}', 1)";

       $resultado=$this->conexion ->query ($consulta);
       return $resultado;

  }
   function mostrar (){

    $consulta="SELECT * FROM url_pelicula up INNER JOIN  peliculas p ON  up.fk_pelicula=p.pk_pelicula";
    $resultado=$this->conexion->query($consulta);
    return $resultado;  
  }
   function mostrarPorId($pk_url_pelicula){

    $consulta="SELECT * FROM url_pelicula where pk_url_pelicula ='{$pk_url_pelicula}'";
    $resultado=$this->conexion->query($consulta);
    return $resultado;  
  }
   function baja (){
    $consulta="UPDATE url_pelicula SET estatus =0 WHERE url_pelicula='{$url_pelicula}'";
        $resultado=$this->conexion->query($consulta);
    return $resultado;  
  }

}


 ?>