<?php
include ("menu.php");
include("clases/Url_trailer.php");
$url_trailer=new Url_trailer();
$registros=$url_trailer->mostrar();
?>
<br><br>
<div class="container">
	<h1>Lista de url de peliculas</h1>

	<br>
	
	<table class="table table-dark table-hover">
		<tr>
			<th>Url del trailer</th>
		    <th>Pelicula</th>
		</tr>
			<?php  
		  while($fila=mysqli_fetch_array($registros)) {
 	 ?>
 	      <tr>
 	       <td><?=$fila["dato_trailer"]?></td>
 	       <td><?=$fila["fk_pelicula"]?></td>
 	       <td><?=$fila["estatus"]?></td>
 	         	<td>
 	           		<a href="editar_url_trailer.php?pk_url_trailer=<?=$fila['pk_url_trailer']?>">
 	           			<i title="Editar" class="bi bi-pencil"></i>
 	           		</a>
 	           		 	<a href="funciones/baja_url_trailer.php?pk_url_trailer=<?=$fila['pk_url_trailer']?>"><i title="Eliminar" class="bi bi-trash"></i>
		 	            </a>

 	           	</td>
 	      
 	       </tr>

 	  <?php 

 	   }
 	   ?>
	</table>