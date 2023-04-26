<?php
include("../clases/Url_pelicula.php");

$url_pelicula=new Url_pelicula();

$dato_pelicula=$_POST['dato_pelicula'];
$fk_pelicula=$_POST['fk_pelicula'];

$respuesta=$url_pelicula->insertar($dato_pelicula,$fk_pelicula);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

?>