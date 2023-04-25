<?php 

class Url_
{
  
  function __construct()
  {
    require_once("Conexion.php");
    $this->conexion = new Conexion();
  }


  function insertar($dato_trailer,$fk_pelicula){
    $consulta="INSERT INTO url_trailer(pk_url_trailer,dato_trailer,fk_pelicula,estatus)VALUES(null,'{$dato_trailer}','{$fk_pelicula}', 1)";

       $resultado=$this->conexion ->query ($consulta);
       return $resultado;

  }
   function mostrar (){

    $consulta="SELECT * FROM url_trailer ut INNER JOIN  peliculas p ON  ut.fk_pelicula=p.pk_pelicula";
    $resultado=$this->conexion->query($consulta);
    return $resultado;  
  }
   function mostrarPorId($pk_url_trailer){

    $consulta="SELECT * FROM url_trailer where pk_url_trailer ='{$pk_url_trailer'";
    $resultado=$this->conexion->query($consulta);
    return $resultado;  
  }
   function baja (){
    $consulta="UPDATE url_trailer SET estatus =0 WHERE pk_url_trailer='{$pk_url_trailer}'";
        $resultado=$this->conexion->query($consulta);
    return $resultado;  
  }
  

}


 ?>