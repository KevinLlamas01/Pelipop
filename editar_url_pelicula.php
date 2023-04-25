<?php 
include("menu.php"); 
include ("clases/Url_pelicula.php");
$url_pelicula=new Url_pelicula();
$pk_url_pelicula=$_GET["pk_url_pelicula"];
$registro=$url_pelicula->mostrarPorId($pk_url_pelicula);
$datos=mysqli_fetch_assoc($registro)
?>

<br><br>
<form action="funciones/actualizar_url_pelicula.php" method="post" class="container">
	<h1>Editar datos de URL de Pelicula</h1>

    <br>

 	<label>Insertar url pelicula:</label>
    <div class="col-6">
 		<input value="<?=$datos['dato_pelicula']?>"  type="url" name="dato_pelicula">
 	</div>

 	<input class="btn btn-primary " type="submit" value="Actualizar">
 	
</form>