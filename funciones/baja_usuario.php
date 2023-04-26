<?php 
include ("../clases/Usuario.php");
$usuario=new Usuario();
$pk_usuario=$_GET["pk_usuario"];

$resultado=$usuario->baja($pk_usuario);

if ($resultado==0) {
    echo "<meta http-equiv='REFRESH' content='0; url=../lista_usuarios.php'> <script> alert('Usuario no dada de baja') </script>";
}else{
    echo "<meta http-equiv='REFRESH' content='0; url=../lista_usuarios.php'> <script> alert('Usuario dada de baja') </script>";
}


 ?>