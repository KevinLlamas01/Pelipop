<?php
include ("menu.php");
include("clases/Url_pelicula.php");
$url_pelicula=new Pelicula();
$registros=$url_pelicula->mostrar();
?>
<br><br>
<div class="container">
	<h1>Lista de url de peliculas</h1>

	<br>
	
	<table class="table table-dark table-hover">
		<tr>
			<th>Url de la pelicula</th>
		    <th>Pelicula</th>
		</tr>

		<?php  
		  while($fila=mysqli_fetch_array($registros)) {
 	 ?>
 	      <tr>
 	       <td><?=$fila["dato_pelicula"]?></td>
 	       <td><?=$fila["fk_pelicula"]?></td>
 	       <td><?=$fila["estatus"]?></td>
 	         	<td>
 	           		<a href="url_pelicula.php?pk_url_pelicula=<?=$fila['pk_url_pelicula']?>">
 	           			<i title="Editar" class="bi bi-pencil"></i>
 	           		</a>
 	           		 	<a href="funciones/baja_url_pelicula.php?pk_url_pelicula=<?=$fila['pk_url_pelicula']?>"><i title="Eliminar" class="bi bi-trash"></i>
		 	            </a>

 	           	</td>
 	      
 	       </tr>

 	  <?php 

 	   }
 	   ?>

	</table>
</div>