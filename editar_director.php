<?php 
include("menu.php"); 
include ("clases/Director.php");
$director=new Director();
$pk_director=$_GET["pk_director"];
$registro=$director->mostrarPorId($pk_director);
$datos=mysqli_fetch_assoc($registro)
?>

<br><br>


<form action="funciones/actualizar_director.php" method="post" class="container">
 	<h1>Editar datos de director</h1>
    <input type="hidden" name="pk_director" value="<?=$datos['pk_director']?>">

    <br>
    
 	<label>Nombre del director:</label>
    <div class="col-6">
 		<input class="form-control" value="<?=$datos['nom_director']?>" type="text" name="nom_director" required>
 	</div>

    <br>
    <input class="btn btn-new" type="submit" value="Actualizar">
 	
</form>
<br><br><br>