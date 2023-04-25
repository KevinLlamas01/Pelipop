<?php
include ("menu.php");
include("clases/Genero.php");
$genero=new Genero();
$registros=$genero->mostrar();
?>
<br><br>

<div class="container">
	<h1>Lista de generos registrados</h1>

	<br>
	
	<table class="table table-dark table-hover">
		<tr>
			<th>Nombre del genero</th>
			<?php if ($_SESSION['tipo']==1) { ?>
			<th>Opciones</th>
			<?php } ?>
		</tr>

		<?php  
 	    while($fila=mysqli_fetch_array($registros)) {
 	 ?>
 	      <tr>
 	           	<td><?=$fila["nom_genero"]?></td>
 	      		<?php
					if ($_SESSION['tipo']==1) {
				?>
					<td>
					<a href="editar_genero.php?pk_genero=<?=$fila['pk_genero']?>">
 	           		<i title="Editar" class="bi bi-pencil"></i>
 	           		</a>
 	           		 <a href="funciones/baja_genero.php?pk_genero=<?=$fila['pk_genero']?>"><i title="Eliminar" class="bi bi-trash"></i>
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