<?php 
include("menu.php");
include ("clases/Genero.php");
$genero=new Genero();
$registros_generos=$genero->mostrar();
?>

<br><br>
<form action="funciones/insertar_pelicula.php" method="post" class="container" enctype="multipart/form-data">
    <h1>Nueva pelicula</h1>
    
    <br>

    <label>Titulo pelicula:</label>
    <div class="col-6">
        <input type="text" name="titulo" class="form-control" required>
    </div>
      
    <br>

    <label>Descricion:</label>
    <div class="col-8">
        <textarea type="text" name="descripcion" class="form-control" required></textarea>
    </div>

    <br>

    <label>Duracion de pelicula:</label>
    <div class="col-4">
        <input type="text" name="duracion" class="form-control" required>
    </div>

    <br>

    <label>calificacion:</label>
    <div class="col-3">
        <input type="number" name="calificacion" class="form-control" required>
    </div>

    <br>

    <label>Fecha de lanzamiento:</label>
    <div class="col-4">
        <input type="date" name="fech_lanzamiento" class="form-control" required>
    </div>

    <br>

    <div class="col-6">
        <label>Genero</label>
        <select class="form-control" name="fk_genero">
            <option>Seleccione un genero</option>
            <?php
                while ($item=mysqli_fetch_array($registros_generos)) {
            ?>
                <option value="<?=$item['pk_genero']?>"><?=$item["nom_genero"]?></option>
            <?php
                }
            ?>
        </select>
    </div>

    <br>

  

    <br>

     <label>Url:</label>
    <div class="col-4">
        <input type="url" name="url" class="form-control" required>
    </div>
    <br>
    <label>Portada: </label>
    <div class="col-6">
        <input class="form-control" type="file" name="portada">
    </div>

    <br>

   <input class="btn btn-new" type="submit" value="Guardar datos">


    
 </form>
 <br><br><br>