<?php 
include("menu.php"); 
include ("clases/Actor.php");
$actor=new Actor();
$pk_actor=$_GET["pk_actor"];
$registro=$actor->mostrarPorId($pk_actor);
$datos=mysqli_fetch_assoc($registro)
?>

<br><br>
<form action="funciones/actualizar_actor.php" method="post" class="container">
    <h1>Editar datos de actor</h1>
    <input type="hidden" name="pk_actor" value="<?=$datos['pk_actor']?>">

    <br>
    
    <label>Nombre del actor:</label>
    <div class="col-6">
        <input class="form-control" value="<?=$datos['nom_actor']?>"  type="text" name="nom_actor" required>
    </div>

    <br>
    <input class="btn btn-new" type="submit" value="Actualizar">
    
</form>