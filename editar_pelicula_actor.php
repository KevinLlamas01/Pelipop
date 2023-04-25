<?php 
include("menu.php");
include ("clases/Pelicula.php");
$pelicula=new Pelicula();
$registros_peliculas=$pelicula->mostrar();
include ("clases/Actor.php");
$actor=new Actor();
$registros_actores=$actor->mostrar();
$registros_peliculas=$pelicula->mostrar();
include ("clases/Pelicula_Actor.php");
$pelicula_actor=new Pelicula_Actor();
$pk_pelicula_actor=$_GET["pk_pelicula_actor"];
$registro=$pelicula_actor->mostrarPorId($pk_pelicula_actor);
$datos=mysqli_fetch_assoc($registro)
?>

<br><br>
<form action="funciones/actualizar_pelicula_actor.php" method="post" class="container">
    <h1>Editar datos de relacion pelicula y actor</h1>
    
    <br>
    <div class="col-6">
        <label>Pelicula</label>
        <select class="form-control" name="fk_pelicula">
            <option>Seleccione una pelicula</option>
            <?php
                while ($item=mysqli_fetch_array($registros_peliculas)) {
            ?>
                <option <?php if ($datos['fk_pelicula']==$fila["pk_pelicula"]){echo "selected";} ?> value="<?=$item['pk_pelicula']?>"><?=$item["titulo"]?></option>
            <?php
                }
            ?>
        </select>
    </div>

    

    <div class="col-6">
        <label>Actor</label>
        <select class="form-control" name="fk_actor">
            <option>Seleccione un actor</option>
            <?php
                while ($item=mysqli_fetch_array($registros_actores)) {
            ?>
                
                <option <?php if ($datos['fk_actor']==$fila["pk_actor"]){echo "selected";} ?>value="<?=$item['pk_actor']?>"><?=$item["nom_actor"]?></option>
            <?php
                }
            ?>
        </select>
    </div>
    
 </form>