<?php
session_start();
include("../clases/Usuario.php");

$usuario=new Usuario();

$nom_usuario=$_POST['nom_usuario'];
$pwr=$_POST['pwr'];

$resultado=$usuario->buscar($nom_usuario, $pwr);
$resultado2=mysqli_num_rows($resultado);
$datos=mysqli_fetch_assoc($resultado);

if ($resultado2==0) {
	echo "<meta http-equiv='REFRESH' content='0; url=../formulario_inicio_sesion.php'> <script> alert('Usuario o contraseña incorrectos') </script>";
}else{
	$_SESSION['pk_usuario']=$datos['pk_usuario'];
	$_SESSION['nom_usuario']=$nom_usuario;
	$_SESSION['tipo']=$datos['tipo'];
	echo "<meta http-equiv='REFRESH' content='0; url=../index.php'> <script> alert('Bienvenido(a)') </script>";
}

?>