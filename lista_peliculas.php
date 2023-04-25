<?php
include ("menu.php");
include("clases/Pelicula.php");
$pelicula=new Pelicula();
$registros=$pelicula->mostrar();
?>
<br><br>

<div class="container">
	<h1>Lista de peliculas registradas</h1>

	<br>
	
	<table class="table table-dark table-hover">
		<tr>
			<th>Titulo</th>
		    <th>Descripcion</th>
		    <th>Duracion</th>
		    <th>Calificacion</th>
		    <th>Fecha de lanzamiento</th>
		    <th>Genero</th>
		    <?php if ($_SESSION['tipo']==1) { ?>
		    <th>Url</th>
		    <th>Portada</th>
			<th>Opciones</th>
			<?php } ?>
		</tr>

		<?php  
		  while($fila=mysqli_fetch_array($registros)) {
 	 ?>
 	      <tr>
 	       <td><?=$fila["titulo"]?></td>
 	       <td><?=$fila["descripcion"]?></td>
 	       <td><?=$fila["duracion"]?></td>
 	       <td><?=$fila["calificacion"]?></td>
 	       <td><?=$fila["fech_lanzamiento"]?></td>
 	       <td><?=$fila["nom_genero"]?></td>
 	       <td><?=$fila["url"]?></td>
 	       <td><img src="img/<?=$fila['portada']?>" width="100%"></td>

 	         		<?php
						if ($_SESSION['tipo']==1) {
					?>
 	         			<td>
						<a href="editar_pelicula.php?pk_pelicula=<?=$fila['pk_pelicula']?>">
 	           			<i title="Editar" class="bi bi-pencil"></i>
 	           			</a>
 	           		 	<a href="funciones/baja_pelicula.php?pk_pelicula=<?=$fila['pk_pelicula']?>"><i title="Eliminar" class="bi bi-trash"></i>
		 	            </a>
		 	            </td>
					<?php
						}
					?>
 	       </tr>

 	  <?php 

 	   }
 	   ?>

	</table>
</div>