<?php
include("../clases/Director.php");

$director=new Director();

$nom_director=$_POST['nom_director'];

$respuesta=$director->insertar($nom_director);

if ($respuesta==0) {
	echo "<meta http-equiv='REFRESH' content='0; url=../formulario_directores.php'> <script> alert('Director no registrado') </script>";
}else{
	echo "<meta http-equiv='REFRESH' content='0; url=../lista_directores.php'> <script> alert('Director registrado') </script>";
}

?>