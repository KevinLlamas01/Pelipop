<?php 
include("../clases/Pelicula.php");
$pelicula=new Pelicula();

$pk_pelicula=$_POST['pk_pelicula'];
$titulo=$_POST["titulo"];
$descripcion=$_POST["descripcion"];
$duracion=$_POST["duracion"];
$calificacion=$_POST["calificacion"];
$fech_lanzamiento=$_POST["fech_lanzamiento"];
$fk_genero=$_POST["fk_genero"];

$respuesta=$pelicula->actualizar($pk_pelicula,$titulo,$descripcion,$duracion,$calificacion,$fech_lanzamiento,$fk_genero);

if ($respuesta==0) {
	echo "<meta http-equiv='REFRESH' content='0; url=../editar_pelicula.php'> <script> alert('Pelicula no actualizada') </script>";
}else{
	echo "<meta http-equiv='REFRESH' content='0; url=../lista_peliculas.php'> <script> alert('Pelicula actualizada') </script>";
}

 ?>