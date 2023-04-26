<?php
include("../clases/Actor.php");

$actor=new Actor();

$nom_actor=$_POST['nom_actor'];

$respuesta=$actor->insertar($nom_actor);

if ($respuesta==0) {
	echo "<meta http-equiv='REFRESH' content='0; url=../formulario_actores.php'> <script> alert('Actor no registrado') </script>";
}else{
	echo "<meta http-equiv='REFRESH' content='0; url=../lista_actores.php'> <script> alert('Actor registrado') </script>";
}

?>