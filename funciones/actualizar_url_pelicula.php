<?php 
include("../clases/Url_pelicula.php");
$url_pelicula=new Url_pelicula();

$pk_url_pelicula=$_POST['pk_url_pelicula'];
$dato_pelicula=$_POST["dato_pelicula"];
$fk_pelicula=$_POST["fk_pelicula"];
$estatus=$_POST["estatus"];

$respuesta=$url_pelicula->actualizar($pk_url_pelicula,$dato_pelicula,$fk_pelicula,$estatus);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

 ?>