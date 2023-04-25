<?php
include ("menu.php");
include("clases/Favoritos.php");
$favoritos=new Favoritos();
$registros=$favoritos->mostrar();
?>
<br><br>

<div class="container">
	<h1>Lista de peliculas favoritas<h1>

	<br>
	
	<table class="table table-dark table-hover">
		<tr>
			<th>Pelicula</th>
		    <th>Usuario</th>
		    <th>Opciones</th>
		</tr>

			<?php  
 	    while($fila=mysqli_fetch_array($registros)) {
 	 ?>
 	      <tr>
 	           	<td><?=$fila["titulo"]?></td>
 	           	<td><?=$fila["nom_usuario"]?></td>
 	           	<td>
 	           		<?php
					if ($_SESSION['tipo']==1) {
				?>
					<a href="editar_favoritos.php?pk_fav=<?=$fila['pk_fav']?>">
 	           			<i title="Editar" class="bi bi-pencil"></i>
 	           		</a>
 	           		 	<a href="funciones/baja_favoritos.php?pk_fav=<?=$fila['pk_fav']?>"><i title="Eliminar" class="bi bi-trash"></i>
		 	            </a>
				<?php
					}
				?>

				<?php 
					if($_SESSION['tipo']==2) {
				?>
					<a href="editar_favoritos.php?pk_fav=<?=$fila['pk_fav']?>">
 	           			<i title="Editar" class="bi bi-pencil"></i>
 	           		</a>
				<?php
					}
				?>
 	           	</td>
 	       </tr>


 	  <?php 

 	   }
 	   ?>
	</table>
</div>