<?php 
include ("../clases/Pelicula_Actor.php");
$pelicula_actor=new Pelicula_Actor();
$pk_pelicula_actor=$_GET["pk_pelicula_actor"];

$resultado=$pelicula_actor->baja($pk_pelicula_actor);

if($resultado){

	echo "Guardado";
}else{
    echo "Error";
}


 ?>