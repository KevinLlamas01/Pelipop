<?php 
include ("../clases/Favoritos.php");
$favoritos=new Favoritos();
$pk_fav=$_GET["pk_fav"];

$resultado=$favoritos->baja($pk_fav);

if ($resultado==0) {
    echo "<meta http-equiv='REFRESH' content='0; url=../lista_favoritos.php'> <script> alert('Pelicula favorita no dada de baja') </script>";
}else{
    echo "<meta http-equiv='REFRESH' content='0; url=../lista_favoritos.php'> <script> alert('Pelicula favorita dada de baja') </script>";
}


 ?>