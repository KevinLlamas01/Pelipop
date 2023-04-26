<?php
include("../clases/Favoritos.php");
session_start();

$favoritos=new Favoritos();

$fk_pelicula=$_POST['fk_pelicula'];
$fk_usuario=$_POST['fk_usuario'];

$respuesta=$favoritos->insertar($fk_pelicula,$fk_usuario);

if ($respuesta==0) {
	echo "<meta http-equiv='REFRESH' content='0; url=../formulario_favoritos.php'> <script> alert('Pelicula no registrada a favoritos') </script>";
}else{
	echo "<meta http-equiv='REFRESH' content='0; url=../lista_favoritos.php'> <script> alert('Pelicula registrada a favoritos') </script>";
}

?>