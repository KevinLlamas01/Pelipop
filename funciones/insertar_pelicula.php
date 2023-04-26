<?php
include("../clases/Pelicula.php");

$pelicula=new Pelicula();

$titulo=$_POST['titulo'];
$descripcion=$_POST['descripcion'];
$duracion=$_POST['duracion'];
$calificacion=$_POST['calificacion'];
$fech_lanzamiento=$_POST['fech_lanzamiento'];
$fk_genero=$_POST['fk_genero'];
$url=$_POST['url'];
$archi_portada=$_FILES["portada"]["tmp_name"];
$nombre_portada=$_FILES["portada"]["name"];

move_uploaded_file($archi_portada,"../img/".$nombre_portada);



$respuesta=$pelicula->insertar($titulo,$descripcion,$duracion,$calificacion,$fech_lanzamiento,$fk_genero,$url,$nombre_portada);

if ($respuesta==0) {
	echo "<meta http-equiv='REFRESH' content='0; url=../formulario_peliculas.php'> <script> alert('Pelicula no registrada') </script>";

}else{
	echo "<meta http-equiv='REFRESH' content='0; url=../lista_peliculas.php'> <script> alert('Pelicula registrada') </script>";

}

?>