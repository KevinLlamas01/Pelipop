<?php 
include("../clases/Genero.php");
$genero=new Genero();

$pk_genero=$_POST['pk_genero'];
$nom_genero=$_POST["nom_genero"];

$respuesta=$genero->actualizar($pk_genero,$nom_genero);

if ($respuesta==0) {
	echo "<meta http-equiv='REFRESH' content='0; url=../editar_genero.php'> <script> alert('Genero no actualizado') </script>";
}else{
	echo "<meta http-equiv='REFRESH' content='0; url=../lista_generos.php'> <script> alert('Genero actualizado') </script>";
}

 ?>