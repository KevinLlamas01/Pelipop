<?php 
include("../clases/Pelicula_Director.php");
$pelicula_director=new Pelicula_Director();

$pk_pelicula_director=$_POST['pk_pelicula_director'];
$fk_director=$_POST["fk_director"];
$fk_pelicula=$_POST["fk_pelicula"];

$respuesta=$pelicula_director->actualizar($pk_pelicula_director,$fk_director,$fk_pelicula);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

 ?>