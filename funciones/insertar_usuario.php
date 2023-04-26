<?php
include("../clases/Usuario.php");
$usuario=new Usuario();

$email=$_POST['email'];
$nom_usuario=$_POST['nom_usuario'];
$sexo=$_POST['sexo'];
$fnac=$_POST['fnac'];
$pwr=$_POST['pwr'];

$archi_avatar=$_FILES["avatar"]["tmp_name"];
$nombre_avatar=$_FILES["avatar"]["name"];

move_uploaded_file($archi_avatar,"../img/.$nombre_avatar");

$respuesta=$usuario->insertar($email,$nom_usuario,$sexo,$fnac,$pwr,$nombre_avatar);

if ($respuesta==0) {
	echo "<meta http-equiv='REFRESH' content='0; url=../formulario_registro_usuario.php'> <script> alert('Usuario no registrado') </script>";
}else{
	echo "<meta http-equiv='REFRESH' content='0; url=../formulario_inicio_sesion.php'> <script> alert('Usuario registrado') </script>";
}

?>