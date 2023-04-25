<?php 
class Pelicula
{
  
  function __construct()
  {
    require_once("Conexion.php");
    $this->conexion = new Conexion();
  }

  function insertar($titulo,$descripcion,$duracion,$calificacion,$fech_lanzamiento,$fk_genero,$url,$portada){
    $consulta="INSERT INTO peliculas (pk_pelicula,titulo,descripcion,duracion,calificacion,fech_lanzamiento,fk_genero,estatus,url,portada) VALUES (null,'{$titulo}','{$descripcion}','{$duracion}','{$calificacion}','{$fech_lanzamiento}','{$fk_genero}', 1,'{$url}','{$portada}')";
       $resultado=$this->conexion ->query ($consulta);
       return $resultado;

  }
   function mostrar(){

    $consulta="SELECT * FROM  peliculas p INNER JOIN  genero g ON  p.fk_genero=g.pk_genero";
    $resultado=$this->conexion->query($consulta);
    return $resultado;  
  }
  
   function mostrarPorId($pk_pelicula){

    $consulta="SELECT * FROM peliculas where pk_pelicula ='{$pk_pelicula}'";
    $resultado=$this->conexion->query($consulta);
    return $resultado;  
  }

  function mostrar_accion(){
    $consulta="SELECT * FROM peliculas p INNER JOIN  genero g ON  p.fk_genero=g.pk_genero WHERE p.fk_genero=1";
    $resultado=$this->conexion->query($consulta);
    return $resultado;
  }
function mostrar_ciencia_ficcion(){
    $consulta="SELECT * FROM peliculas p INNER JOIN  genero g ON  p.fk_genero=g.pk_genero WHERE p.fk_genero=2";
    $resultado=$this->conexion->query($consulta);
    return $resultado;
  }
  function mostrar_fantasia(){
    $consulta="SELECT * FROM peliculas p INNER JOIN  genero g ON  p.fk_genero=g.pk_genero WHERE p.fk_genero=3";
    $resultado=$this->conexion->query($consulta);
    return $resultado;
  }
   function mostrar_terror(){
    $consulta="SELECT * FROM peliculas p INNER JOIN  genero g ON  p.fk_genero=g.pk_genero WHERE p.fk_genero=4";
    $resultado=$this->conexion->query($consulta);
    return $resultado;
  }
   function mostrar_comedia(){
    $consulta="SELECT * FROM peliculas p INNER JOIN  genero g ON  p.fk_genero=g.pk_genero WHERE p.fk_genero=5";
    $resultado=$this->conexion->query($consulta);
    return $resultado;
  }
   function mostrar_recientes(){
    $consulta="SELECT * FROM peliculas p INNER JOIN  genero g ON  p.fk_genero=g.pk_genero WHERE p.fk_genero=6";
    $resultado=$this->conexion->query($consulta);
    return $resultado;
  }


   function baja ($pk_pelicula){
    $consulta="UPDATE peliculas SET estatus=0 WHERE pk_pelicula='{$pk_pelicula}'";
    $resultado=$this->conexion->query($consulta);
    return $resultado;  
  }
  function actualizar($pk_pelicula, $titulo, $descripcion, $duracion, $calificacion, $fech_lanzamiento, $fk_genero){
    $consulta="UPDATE peliculas SET titulo='{$titulo}', descripcion='{$descripcion}', duracion='{$duracion}', calificacion='{$calificacion}', fech_lanzamiento='{$fech_lanzamiento}', fk_genero='{$fk_genero}' WHERE pk_pelicula='{$pk_pelicula}' ";
    $resultado=$this->conexion->query($consulta);
    return $resultado;
  }

}

?>