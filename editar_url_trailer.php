<?php 
include("menu.php"); 
include ("clases/Url_trailer.php");
$url_trailer=new Url_trailer();
$pk_url_trailer=$_GET["pk_url_trailer"];
$registro=$url_trailer->mostrarPorId($pk_url_trailer);
$datos=mysqli_fetch_assoc($registro)
?>

<br><br>
<form action="funciones/actualizar_url_trailer.php" method="post" class="container">
	<h1>Añadir Nuevo URL de Trailer</h1>

    <br>

 	<label>Insertar url trailer:</label>
    <div class="col-6">
 		<input value="<?=$datos['dato_trailer']?>" type="url" name="dato_trailer">
 	</div>
 	<input class="btn btn-primary " type="submit" value="Actualizar">
</form>