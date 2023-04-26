<?php
include("../clases/Usuario.php");
$usuario=new Usuario();

$email=$_POST['email'];
$nom_usuario=$_POST['nom_usuario'];
$sexo=$_POST['sexo'];
$fnac=$_POST['fnac'];
$pwr=$_POST['pwr'];
$tipo=$_POST['tipo'];

$archi_avatar=$_FILES["avatar"]["tmp_name"];
$nombre_avatar=$_FILES["avatar"]["name"];

move_uploaded_file($archi_avatar,"../img/.$nombre_avatar");

$respuesta=$usuario->insertar($email,$nom_usuario,$sexo,$fnac,$pwr,$nombre_avatar,$tipo);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

?>