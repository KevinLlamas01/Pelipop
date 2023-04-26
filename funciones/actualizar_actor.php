<?php 
include("../clases/Actor.php");
$actor=new Actor();

$pk_actor=$_POST['pk_actor'];
$nom_actor=$_POST["nom_actor"];

$respuesta=$actor->actualizar($pk_actor,$nom_actor);

if ($respuesta==0) {
	echo "<meta http-equiv='REFRESH' content='0; url=../editar_actor.php'> <script> alert('Actor no actualizado') </script>";
}else{
	echo "<meta http-equiv='REFRESH' content='0; url=../lista_actores.php'> <script> alert('Actor actualizado') </script>";
}

 ?>