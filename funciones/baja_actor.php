<?php 
include ("../clases/Actor.php");
$actor=new Actor();
$pk_actor=$_GET['pk_actor'];

$resultado=$actor->baja($pk_actor);

if ($resultado==0) {
    echo "<meta http-equiv='REFRESH' content='0; url=../lista_actores.php'> <script> alert('Actor no dado de baja') </script>";
}else{
    echo "<meta http-equiv='REFRESH' content='0; url=../lista_actores.php'> <script> alert('Actor dado de baja') </script>";
}


 ?>