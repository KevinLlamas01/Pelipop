<?php 
include("menu.php"); 
?>

<br><br>
<form action="funciones/insertar_director.php" method="post" class="container">
 	<h1>Añadir Nuevo director</h1>

    <br>
    
 	<label>Nombre del director:</label>
    <div class="col-6">
 		<input class="form-control" type="text" name="nom_director" required>
 	</div>

    <br>
 	 <input class="btn btn-new" type="submit" value="Guardar datos">
</form>
<br><br><br>