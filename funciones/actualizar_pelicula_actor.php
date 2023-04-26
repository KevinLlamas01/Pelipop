<?php 
include("../clases/Pelicula_Actor.php");
$pelicula_actor=new Pelicula_Actor();

$pk_pelicula_actor=$_POST['pk_pelicula_actor'];
$fk_actor=$_POST["fk_actor"];
$fk_pelicula=$_POST["fk_pelicula"];

$respuesta=$pelicula_actor->actualizar($pk_pelicula_actor,$fk_actor,$fk_pelicula);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

 ?>