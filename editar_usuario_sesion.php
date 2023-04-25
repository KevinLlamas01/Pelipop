<?php
include("menu.php");
include("clases/Usuario.php");
$usuario=new Usuario();
$pk_usuario=$_SESSION["pk_usuario"];

$registro=$usuario->mostrarPorId($pk_usuario);
$datos=mysqli_fetch_assoc($registro);
?>
<br><br>
<form action="funciones/actualizar_usuario.php" method="post" enctype="multipart/form-data"  class="container">
	<h1>Actualizar datos de usuario</h1>
	<input type="hidden" name="pk_usuario" value="<?=$datos['pk_usuario']?>">
	<br>
	<label>E-mail: </label>
	<div class="col-5">
		<input class="form-control" type="email" name="email" value="<?=$datos['email']?>" required>
	</div>

	<br>

	<label>Nombre de usuario: </label>
	<div class="col-6">
		<input class="form-control" type="text" name="nom_usuario" value="<?=$datos['nom_usuario']?>" required>
	</div>

	<br>

	<label>Sexo: </label>
	<br>
		<small>Femenino</small>
			<input type="radio" name="sexo" value="F" required>
		<small>Masculino</small>
			<input type="radio" name="sexo" value="M" required>
		<small>Otro</small>
			<input type="radio" name="sexo" value="O" required>

	<br><br>

	<label>Fecha de nacimiento: </label>
	<div class="col-4">
		<input class="form-control" type="date" name="fnac" value="<?=$datos['fnac']?>" required>
	</div>

	<br>

	<label>Contraseña: </label>
	<div class="col-5">
		<input class="form-control" type="password" name="pwr" value="<?=$datos['pwr']?>" required>
	</div>

	<br>

	<div class="col-4">
		<br>
		<img src="img/<?=$datos['avatar']?>" width="100%">
		<input type="hidden" name="avatar" value="<?=$datos['avatar']?>">
	</div>
	<br>
	<div class="col-4">
		<label>Imagen de usuario: </label>
		<input class="form-control" type="file" name="avatar_nuevo">
	</div>

	<br><br>
	<input class="btn btn-new" type="submit" value="Actualizar">

</form>
<br><br><br>