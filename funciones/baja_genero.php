<?php 
include ("../clases/Genero.php");
$genero=new Genero();
$pk_genero=$_GET["pk_genero"];

$resultado=$genero->baja($pk_genero);

if ($resultado==0) {
    echo "<meta http-equiv='REFRESH' content='0; url=../lista_generos.php'> <script> alert('Genero no dado de baja') </script>";
}else{
    echo "<meta http-equiv='REFRESH' content='0; url=../lista_generos.php'> <script> alert('Genero dado de baja') </script>";
}


 ?>