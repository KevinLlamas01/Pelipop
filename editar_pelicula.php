<?php 
include("menu.php");
include("clases/Genero.php");
$genero=new Genero();
$arregloDatos=$genero->mostrar();
include ("clases/Pelicula.php");
$pelicula=new Pelicula();
$pk_pelicula=$_GET["pk_pelicula"];
$registro=$pelicula->mostrarPorId($pk_pelicula);
$datos=mysqli_fetch_assoc($registro)
?>

<br><br>
<form action="funciones/actualizar_pelicula.php" method="post" class="container">
    <h1>Editar datos de pelicula</h1>
    <input type="hidden" name="pk_pelicula" value="<?=$datos['pk_pelicula']?>">
    
    <br>

    <label>Titulo pelicula:</label>
    <div class="col-6">
        <input class="form-control" type="text" name="titulo" value="<?=$datos['titulo']?>" required>
    </div>
      
    <br>

    <label>Descricion:</label>
    <div class="col-8">
        <textarea class="form-control" type="text" name="descripcion" required><?=$datos['descripcion']?></textarea>
    </div>

    <br>

    <label>Duracion de pelicula:</label>
    <div class="col-4">
        <input class="form-control" type="text" name="duracion" value="<?=$datos['duracion']?>" required>
    </div>

    <br>

    <label>calificacion:</label>
    <div class="col-3">
        <input class="form-control" type="number" name="calificacion" value="<?=$datos['calificacion']?>" required>
    </div>

    <br>

    <label>Fecha de lanzamiento:</label>
    <div class="col-4">
        <input class="form-control" type="date" name="fech_lanzamiento" value="<?=$datos['fech_lanzamiento']?>" required>
    </div>

    <br>

    <div class="col-6">
        <label>Genero</label>
        <select class="form-control" name="fk_genero">
            <option>Seleccione un genero</option>
            <?php
                while ($fila=mysqli_fetch_array($arregloDatos)) {
            ?>
                <option <?php if($datos['fk_genero']==$fila["pk_genero"]){echo "selected";} ?> value="<?=$fila['pk_genero']?>"><?=$fila["nom_genero"]?></option>
            <?php
                }
            ?>
        </select>
    </div>

    <br>
    <input class="btn btn-new" type="submit" value="Actualizar">
    
 </form>
 <br><br><br>