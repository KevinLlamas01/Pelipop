<?php
include("menu2.php");
?>
<br><br>
<form action="funciones/validar_usuario.php" method="post" class="container">
	<div align="center">
	<h1>Iniciar Sesion</h1>

	<br>

	<label>Usuario: </label>
	<div class="col-3">
		<input class="form-control" type="text" name="nom_usuario" required>
	</div>

	<br> <br>

	<label>Contraseña: </label>
	<div class="col-3">
		<input class="form-control" type="password" name="pwr" required>
	</div>

	<br><br>

	<input class="btn btn-new" type="submit" value="Ingresar" required>

	<br> <br>

	<a class="btn-new2 btn" href="formulario_registro_usuario.php">Registrarse</a>
	</div>
</form>
<br><br><br>