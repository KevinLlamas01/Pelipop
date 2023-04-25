<?php
include ("menu.php");
include("clases/Pelicula_Actor.php");
$pelicula_actor=new Pelicula_Actor();
$registros=$pelicula_actor->mostrar();
?>
<br><br>
<div class="container">
	<h1>Lista de pelicula-actor registrados</h1>

	<br>
	
	<table class="table table-dark table-hover">
		<tr>
			<th>Pelicula</th>
		    <th>Actor</th>
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