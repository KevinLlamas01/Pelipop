<?php 
include ("../clases/Pelicula.php");
$pelicula=new Pelicula();
$pk_pelicula=$_GET["pk_pelicula"];

$resultado=$pelicula->baja($pk_pelicula);

if ($resultado==0) {
    echo "<meta http-equiv='REFRESH' content='0; url=../lista_peliculas.php'> <script> alert('Pelicula no dada de baja') </script>";
}else{
    echo "<meta http-equiv='REFRESH' content='0; url=../lista_peliculas.php'> <script> alert('Pelicula dada de baja') </script>";
}


 ?>