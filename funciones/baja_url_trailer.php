<?php 
include ("../clases/Url_trailer.php");
$url_trailer new Url_trailer();
$pk_url_trailer=$_GET["pk_url_trailer"];

$resultado=$url_trailer->baja($pk_url_trailer);

if($resultado){

	echo "Guardado";
}else{
    echo "Error";
}


 ?>