<?php 
include ("../clases/Url_pelicula.php");
$url_pelicula new Url_pelicula();
$pk_url_pelicula=$_GET["pk_url_pelicula"];

$resultado=$url_pelicula->baja($pk_url_pelicula);

if($resultado){

	echo "Guardado";
}else{
    echo "Error";
}


 ?>