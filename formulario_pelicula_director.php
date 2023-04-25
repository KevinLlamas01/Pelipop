<?php 
include("menu.php"); 
?>

<br><br>
<form action="funciones/insertar_actor.php" method="post" class="container">
 	<h1>Añadir pelicula-actor</h1>

    <br>
   
 	<br>
 	<label>Pelicula</label>
 	<select class="form-control" name="fk_pelicula"> 
	<option value="">Seleccione una opción</option>
 	<br>
 	<br>
 	<label>Director</label>
 	<select class="form-control" name="fk_director"> 
	<option value="">Seleccione una opción</option>
</form>