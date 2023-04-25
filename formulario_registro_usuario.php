<?php
include("menu2.php");
?>

<br><br>
<form action="funciones/insertar_usuario.php" method="post" enctype="multipart/form-data" class="container">
	<h1>Registrate</h1>
	<br>
	<label>E-mail: </label>
	<div class="col-5">
		<input class="form-control" type="email" name="email" required>
	</div>

	<br>

	<label>Nombre de usuario: </label>
	<div class="col-6">
		<input class="form-control" type="text" name="nom_usuario" required>
	</div>

	<br>

	<label>Sexo: </label><br>
		<small>Femenino</small>
			<input type="radio" name="sexo" value="F" required>
		<small>Masculino</small>
			<input type="radio" name="sexo" value="M" required>
		<small>Otro</small>
			<input type="radio" name="sexo" value="O" required>

	<br><br>

	<label>Fecha de nacimiento: </label>
	<div class="col-4">
		<input class="form-control" type="date" name="fnac" required>
	</div>

	<br>

	<label>Contraseña: </label>
	<div class="col-5">
		<input class="form-control" type="password" name="pwr" required>
	</div>

	<br>

	<label>Imagen de usuario: </label>
	<div class="col-6">
		<input class="form-control" type="file" name="avatar">
	</div>

	<br><br>
		<input class="btn btn-new" type="submit" value="Guardar datos">
		<br><br>
		<a class="btn-new2 btn" href="formulario_inicio_sesion.php">Regresar</a>
</form>
<br><br><br>