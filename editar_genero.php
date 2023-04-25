<?php 
include("menu.php"); 
include ("clases/Genero.php");
$genero=new Genero();
$pk_genero=$_GET["pk_genero"];
$registro=$genero->mostrarPorId($pk_genero);
$datos=mysqli_fetch_assoc($registro)
?>

<br><br>
<form action="funciones/actualizar_genero.php" method="post" class="container">
 	<h1>Editar datos de genero</h1>
    <input type="hidden" name="pk_genero" value="<?=$datos['pk_genero']?>">

    <br>
    
 	<label>Nombre del genero:</label>
    <div class="col-6">
 		<input class="form-control" value="<?=$datos['nom_genero']?>" type="text" name="nom_genero" required>
 	</div>

    <br>
 	<input class="btn btn-new" type="submit" value="Actualizar">
</form>
<br><br><br>