<?php
include ("menu.php");
include("clases/Actor.php");
$actor=new Actor();
$arregloDatos=$actor->mostrar();
?>
<br><br>
<div class="container">
	<h1>Lista de actores registrados</h1>
	
	<br>
	
	<table class="table table-dark table-hover">
		<tr>
			<th>Nombre del actor</th>
			<?php if ($_SESSION['tipo']==1) { ?>
			<th>Opciones</th>
			<?php } ?>
		</tr>
		<?php  
 	    while($fila=mysqli_fetch_array($arregloDatos)) {
 	 ?>
 	      <tr>
 	           	<td><?=$fila["nom_actor"]?></td>
 	           	<?php
					if ($_SESSION['tipo']==1) {
				?>
					<td>
						<a href="editar_actor.php?pk_actor=<?=$fila['pk_actor']?>">
 	           			<i title="Editar" class="bi bi-pencil"></i>
 	           			</a>
 	           		 	<a href="funciones/baja_actor.php?pk_actor=<?=$fila['pk_actor']?>"><i title="Eliminar" class="bi bi-trash"></i>
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