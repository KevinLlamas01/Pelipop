<?php 
include("../clases/Url_trailer.php");
$url_trailer=new Url_trailer();

$pk_url_trailer=$_POST['pk_url_trailer'];
$dato_trailer=$_POST["dato_trailer"];
$fk_pelicula=$_POST["fk_pelicula"];

$respuesta=$url_trailer->actualizar($pk_url_trailer,$dato_trailer,$fk_pelicula);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

 ?>