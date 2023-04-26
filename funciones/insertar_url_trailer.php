<?php
include("../clases/Url_trailer.php");

$url_trailer=new Url_trailer();

$dato_trailer=$_POST['dato_trailer'];
$fk_pelicula=$_POST['fk_pelicula'];

$respuesta=$url_trailer->insertar($dato_trailer,$fk_pelicula);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

?>