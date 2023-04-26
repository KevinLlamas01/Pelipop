<?php 
include ("../clases/Pelicula_Director.php");
$pelicula_director=new Pelicula_Director();
$pk_pelicula_director=$_GET["pk_pelicula_director"];

$resultado=$pelicula_director->baja($pk_pelicula_director);

if($resultado){

	echo "Guardado";
}else{
    echo "Error";
}


 ?>