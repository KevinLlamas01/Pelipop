<?php 
include ("../clases/Director.php");
$director=new Director();
$pk_director=$_GET["pk_director"];

$resultado=$director->baja($pk_director);

if ($resultado==0) {
    echo "<meta http-equiv='REFRESH' content='0; url=../lista_directores.php'> <script> alert('Director no dado de baja') </script>";
}else{
    echo "<meta http-equiv='REFRESH' content='0; url=../lista_directores.php'> <script> alert('Director dado de baja') </script>";
}


 ?>