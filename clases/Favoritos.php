<?php 

class Favoritos
{
  
  function __construct()
  {
    require_once("Conexion.php");
    $this->conexion = new Conexion();
  }


  function insertar($fk_pelicula,$fk_usuario){
    $consulta="INSERT INTO favoritos(pk_fav,fk_pelicula,fk_usuario,estatus)VALUES(null,'{$fk_pelicula}','{$fk_usuario}', 1)";
       $resultado=$this->conexion ->query ($consulta);
       return $resultado;

  }
   function mostrar (){

    $consulta="SELECT * FROM  peliculas p INNER JOIN  favoritos f ON  f.fk_pelicula=p.pk_pelicula INNER JOIN usuario u ON u.pk_usuario=f.fk_usuario";
    $resultado=$this->conexion->query($consulta);
    return $resultado;  
  }
     function mostrarPorId($pk_fav){

    $consulta="SELECT * FROM favoritos where pk_fav ='{$pk_fav}'";
    $resultado=$this->conexion->query($consulta);
    return $resultado;  
  }
   function baja ($pk_fav){
    $consulta="UPDATE favoritos SET estatus =0 WHERE pk_fav='{$pk_fav}'";
        $resultado=$this->conexion->query($consulta);
    return $resultado;
    }  
    function actualizar($pk_fav,$fk_pelicula,$fk_usuario){
      $consulta="UPDATE favoritos SET fk_pelicula='{$fk_pelicula}', fk_usuario='{$fk_usuario}' WHERE pk_fav='{$pk_fav}' ";
      $resultado=$this->conexion->query($consulta);
      return $resultado;
  }

  }


 ?>