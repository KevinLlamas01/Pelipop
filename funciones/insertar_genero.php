<?php
include("../clases/Genero.php");

$genero=new Genero();

$nom_genero=$_POST['nom_genero'];

$respuesta=$genero->insertar($nom_genero);

if ($respuesta==0) {
	echo "<meta http-equiv='REFRESH' content='0; url=../formulario_genero.php'> <script> alert('Genero no registrado') </script>";
}else{
	echo "<meta http-equiv='REFRESH' content='0; url=../lista_generos.php'> <script> alert('Genero registrado') </script>";
}

?>