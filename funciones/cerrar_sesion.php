<?php
session_start();

session_unset();
session_destroy();
header("location: ../formulario_inicio_sesion.php");

?>