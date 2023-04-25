<?php
include ("menu.php");
include("clases/Director.php");
$director=new Director();
$arregloDatos=$director->mostrar();
?>
<br><br>
<div class="container">
	<h1>Lista de directores registrados</h1>

	<br>

	<table class="table table-dark table-hover">
		<tr>
			<th>Nombre del director</th>
			<?php if ($_SESSION['tipo']==1) { ?>
			<th>Opciones</th>
			<?php } ?>
		</tr>

		<?php  
 	    while($fila=mysqli_fetch_array($arregloDatos)) {
 	 ?>
 	      <tr>
 	           	<td><?=$fila["nom_director"]?></td>
 	           	<?php
					if ($_SESSION['tipo']==1) {
				?>
					<td>
					<a href="editar_director.php?pk_director=<?=$fila['pk_director']?>">
 	           		<i title="Editar" class="bi bi-pencil"></i>
 	           		</a>
 	           		<a href="funciones/baja_director.php?pk_director=<?=$fila['pk_director']?>"><i title="Eliminar" class="bi bi-trash"></i>
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