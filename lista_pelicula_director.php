<?php
include ("menu.php");
include("clases/Pelicula_Director.php");
$pelicula_director=new Pelicula_Director();
$registros=$pelicula_director->mostrar();
?>
<br><br>
<div class="container">
	<h1>Lista de pelicula-director registrados</h1>

	<br>
	
	<table class="table table-dark table-hover">
		<tr>
			<th>Pelicula</th>
		    <th>Director</th>
		</tr>
		<?php  
		  while($fila=mysqli_fetch_array($registros)) {
 	 ?>
 	      <tr>
 	       <td><?=$fila["fk_actor"]?></td>
 	       <td><?=$fila["fk_pelicula"]?></td>
 	           	
 	       </tr>

 	  <?php 

 	   }
 	   ?>


	</table>
</div>
