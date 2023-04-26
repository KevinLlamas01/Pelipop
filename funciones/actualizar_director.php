<?php 
include("../clases/Director.php");
$director=new Director();

$pk_director=$_POST['pk_director'];
$nom_director=$_POST['nom_director'];

$respuesta=$director->actualizar($pk_director,$nom_director);

if ($respuesta==0) {
	echo "<meta http-equiv='REFRESH' content='0; url=../editar_director.php'> <script> alert('Director no actualizado') </script>";
}else{
	echo "<meta http-equiv='REFRESH' content='0; url=../lista_directores.php'> <script> alert('Director actualizado') </script>";
}

 ?>