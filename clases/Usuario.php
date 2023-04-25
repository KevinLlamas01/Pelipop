<?php 

class Usuario
{
  
  function __construct()
  {
    require_once("Conexion.php");
    $this->conexion = new Conexion();
  }


  function insertar($email,$nom_usuario,$sexo,$fnac,$pwr,$avatar){
    $consulta="INSERT INTO usuario(pk_usuario,email,nom_usuario,sexo,fnac,pwr,avatar,estatus)VALUES(null,'{$email}','{$nom_usuario}','{$sexo}','{$fnac}','{$pwr}','{$avatar}', 1)";
       $resultado=$this->conexion ->query ($consulta);
       return $resultado;

  }
   function mostrar(){

    $consulta="SELECT * FROM  usuario";
    $resultado=$this->conexion->query($consulta);
    return $resultado;  
  }
   function mostrarPorId($pk_usuario){

    $consulta="SELECT * FROM usuario where pk_usuario ='{$pk_usuario}'";
    $resultado=$this->conexion->query($consulta);
    return $resultado;  
  }
   function baja ($pk_usuario){
    $consulta="UPDATE usuario SET estatus =0 WHERE pk_usuario='{$pk_usuario}'";
        $resultado=$this->conexion->query($consulta);
    return $resultado;  
  }
  function buscar($nom_usuario, $pwr){
    $consulta="SELECT * FROM usuario WHERE nom_usuario='{$nom_usuario}' AND pwr='{$pwr}' AND estatus=1";
    $resultado=$this->conexion->query($consulta);
    return $resultado;
  }

  function actualizar($pk_usuario, $email, $nom_usuario, $sexo, $fnac, $pwr, $avatar){
    $consulta="UPDATE usuario SET email='{$email}', nom_usuario='{$nom_usuario}', sexo='{$sexo}', fnac='{$fnac}', pwr='{$pwr}', avatar='{$avatar}', tipo=2 WHERE pk_usuario='{$pk_usuario}' ";
    $resultado=$this->conexion->query($consulta);
    return $resultado;
  }

}


 ?>