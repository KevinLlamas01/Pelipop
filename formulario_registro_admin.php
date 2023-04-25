<?php
include("menu.php");
?>

<br><br>
<form action="funciones/insertar_usuario_admin.php" method="post" enctype="multipart/form-data" class="container">
	<h1>Registrate</h1>
	<br>
	<label>E-mail: </label>
	<div class="col-5">
		<input class="form-control" type="email" name="email">
	</div>

	<br>

	<label>Nombre de usuario: </label>
	<div class="col-6">
		<input class="form-control" type="text" name="nom_usuario">
	</div>

	<br>

	<label>Sexo: </label><br>
		<small>Femenino</small>
			<input type="radio" name="sexo" value="F">
		<small>Masculino</small>
			<input type="radio" name="sexo" value="M">
		<small>Otro</small>
			<input type="radio" name="sexo" value="O">

	<br><br>

	<label>Fecha de nacimiento: </label>
	<div class="col-4">
		<input class="form-control" type="date" name="fnac">
	</div>

	<br>

	<label>Contraseña: </label>
	<div class="col-5">
		<input class="form-control" type="password" name="pwr">
	</div>

	<br>

	<label>Imagen de usuario: </label>
	<div class="col-6">
		<input class="form-control" type="file" name="avatar">
	</div>

	<br>

	<label>Tipo: </label>
	<div class="col-3">
	<select name="tipo" class="form-control">
		<option value="1">Admin</option>
		<option value="2">Usuario</option>
	</select>
	</div>

	<br><br>
	<input class="btn btn-new" type="submit" value="Guardar datos">

</form>