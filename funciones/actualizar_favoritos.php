<?php 
include("../clases/Favoritos.php");
$favoritos=new Favoritos();

$pk_fav=$_POST['pk_fav'];
$fk_pelicula=$_POST["fk_pelicula"];
$fk_usuario=$_POST['fk_usuario'];

$respuesta=$favoritos->actualizar($pk_fav,$fk_pelicula,$fk_usuario);

if ($respuesta==0) {
	echo "<meta http-equiv='REFRESH' content='0; url=../editar_favoritos.php'> <script> alert('Pelicula favorita no actualizada') </script>";
}else{
	echo "<meta http-equiv='REFRESH' content='0; url=../lista_favoritos.php'> <script> alert('Pelicula favorita actualizada') </script>";
}

 ?>