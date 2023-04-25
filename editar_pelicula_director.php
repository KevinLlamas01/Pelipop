<?php 
include("menu.php");
include ("clases/Pelicula.php");
$pelicula=new Pelicula();
$registros_peliculas=$pelicula->mostrar();
include ("clases/Director.php");
$director=new Actor();
$registros_actores=$director->mostrar();
$registros_peliculas=$pelicula->mostrar();
include ("clases/Pelicula_Director.php");
$pelicula_director=new Pelicula_Director();
$pk_pelicula_director=$_GET["pk_pelicula_director"];
$registro=$pelicula_director->mostrarPorId($pk_pelicula_director);
$datos=mysqli_fetch_assoc($registro)
?>


<br><br>
<form action="funciones/actualizar_pelicula_director.php" method="post" class="container">
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
        <label>Director</label>
        <select class="form-control" name="fk_director">
            <option>Seleccione un director</option>
            <?php
                while ($item=mysqli_fetch_array($registros_directores)) {
            ?>
                <option <?php if ($datos['fk_director']==$fila["pk_director"]){echo "selected";} ?> value="<?=$item['pk_director']?>"><?=$item["nom_director"]?></option>
            <?php
                }
            ?>
        </select>
    </div>
    
    
 </form>    
