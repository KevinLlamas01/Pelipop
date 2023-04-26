<?php
include("../clases/Usuario.php");
$usuario=new Usuario();

$pk_usuario=$_POST['pk_usuario'];
$email=$_POST['email'];
$nom_usuario=$_POST['nom_usuario'];
$sexo=$_POST['sexo'];
$fnac=$_POST['fnac'];
$pwr=$_POST['pwr'];
$avatar=$_POST['avatar'];

$archi_avatar=$_FILES["avatar_nuevo"]["tmp_name"];
$nombre_avatar=$_FILES["avatar_nuevo"]["name"];

if ($nombre_avatar!="") {
	move_uploaded_file($archi_avatar, "../img/.$nombre_avatar");
	$respuesta=$usuario->actualizar($pk_usuario,$email,$nom_usuario,$sexo,$fnac,$pwr,$nombre_avatar);
}else{
	$respuesta=$usuario->actualizar($pk_usuario,$email,$nom_usuario,$sexo,$fnac,$pwr,$avatar);
}

if ($respuesta==0) {
	echo "<meta http-equiv='REFRESH' content='0; url=../editar_usuario.php'> <script> alert('Usuaio no actualizado') </script>";
}else{
	echo "<meta http-equiv='REFRESH' content='0; url=../lista_usuarios.php'> <script> alert('Usuaio actualizado') </script>";
}

?>