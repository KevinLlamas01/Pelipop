<?php 
include("menu.php"); 
?>

<br><br>
<form action="funciones/insertar_url_pelicula.php" method="post" class="container">
	<h1>Añadir Nuevo URL de Pelicula</h1>

    <br>

 	<label>Insertar url pelicula:</label>
    <div class="col-6">
 		<input class="form-control" type="url" name="dato_pelicula">
 	</div>
 	
</form>