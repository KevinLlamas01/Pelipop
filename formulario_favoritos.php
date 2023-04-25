<?php 
include("menu.php"); 
include ("clases/Pelicula.php");
$pelicula=new Pelicula();
$registros_peliculas=$pelicula->mostrar();
include ("clases/Usuario.php");
$usuario=new Usuario();
$registros_usuarios=$usuario->mostrar();
?>

<br><br>
<form action="funciones/insertar_favoritos.php" method="post" class="container">
    <h1>Añadir favoritos</h1>

    <br>
   
    <div class="col-6">
        <label>Pelicula</label>
          <select class="form-control" name="fk_pelicula"> 
                <option>Seleccione una opción</option>
                    <?php 
                        while($item=mysqli_fetch_array($registros_peliculas)){
                    ?>
                <option value="<?=$item['pk_pelicula']?>"><?=$item["titulo"]?></option>
                    <?php 
                       }
                    ?>
          </select>
    </div>

    <br>

    <div class="col-6">
        <label>Usuario</label>
            <select class="form-control" name="fk_usuario"> 
                <option>Seleccione una opción</option>
                     <?php 
                        while($item=mysqli_fetch_array($registros_usuarios)){
                    ?>
                <option value="<?=$item['pk_usuario']?>"><?=$item["nom_usuario"]?></option>
                    <?php 
                        }
                    ?>
            </select>
    </div>

    <br>

   <input class="btn btn-new" type="submit" value="Guardar datos">

</form>
<br><br><br>