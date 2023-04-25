<?php 
include("menu.php");
include ("clases/Pelicula.php");
$pelicula=new Pelicula();
$registros_peliculas=$pelicula->mostrar();
include ("clases/Usuario.php");
$usuario=new Usuario();
$registros_usuarios=$usuario->mostrar();
include ("clases/Favoritos.php");
$favoritos=new Favoritos();
$pk_fav=$_GET["pk_fav"];
$registro=$favoritos->mostrarPorId($pk_fav);
$datos=mysqli_fetch_assoc($registro)
?>

<br><br>
<form action="funciones/actualizar_favoritos.php" method="post" class="container">
    <h1>Editar datos de favoritos</h1>
    <input type="hidden" name="pk_fav" value="<?=$datos['pk_fav']?>">
    
    <br>

    <div class="col-6">
        <label>Pelicula:</label>
        <select class="form-control" name="fk_pelicula">
            <option>Seleccione una pelicula</option>
            <?php
                while ($item=mysqli_fetch_array($registros_peliculas)) {
            ?>
                <option <?php if ($datos['fk_pelicula']==$item["pk_pelicula"]){echo "selected";} ?> value="<?=$item['pk_pelicula']?>"><?=$item["titulo"]?></option>
            <?php
                }
            ?>
        </select>
    </div>

    <br>

      <div class="col-6">
        <label>Usuario:</label>
        <select class="form-control" name="fk_usuario">
            <option>Seleccione un usuario</option>
            <?php
                while ($item=mysqli_fetch_array($registros_usuarios)) {
            ?>
                <option <?php if ($datos['fk_usuario']==$item["pk_usuario"]){echo "selected";} ?> value="<?=$item['pk_usuario']?>"><?=$item["nom_usuario"]?></option>
            <?php
                }
            ?>
        </select>
    </div>
    
    <br>
    <input class="btn btn-new" type="submit" value="Actualizar">
 </form>
 <br><br><br>