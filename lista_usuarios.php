<?php
include ("menu.php");
include("clases/Usuario.php");
$usuario=new Usuario();
$registros=$usuario->mostrar();
?>
<br><br>

<div class="container">
	<h1>Lista de usuarios registrados</h1>

	<br>
	
	<table class="table table-dark table-hover">
		<tr>
			<th>Email</th>
		    <th>Nombre de usuario</th>
		    <th>Sexo</th>
		    <th>Fecha de nacimiento</th>
		    <th>Contraseña</th>
		    <th>Avatar</th>
		    <th>Estatus</th>
		    <th>Tipo</th>
			<th>Opciones</th>
		</tr>
		<?php  
		  while($fila=mysqli_fetch_array($registros)) {
		  	if ($_SESSION['tipo']==2) {
		  		
		  	}
 	 ?>
 	      <tr>
 	       <td><?=$fila["email"]?></td>
 	       <td><?=$fila["nom_usuario"]?></td>
 	       <td><?=$fila["sexo"]?></td>
 	       <td><?=$fila["fnac"]?></td>
 	       <td><?=$fila["pwr"]?></td>
 	       <td><img src="img/<?=$fila['avatar']?>" width="100%"></td>
 	       <td><?=$fila["estatus"]?></td>
 	       <td><?=$fila["tipo"]?></td>
	 	        <?php
					if ($_SESSION['tipo']==1) {
				?>
					<td>
					<a href="editar_usuario.php?pk_usuario=<?=$fila['pk_usuario']?>">
					<i title="Editar" class="bi bi-pencil"></i>
					</a>
					<a href="funciones/baja_usuario.php?pk_usuario=<?=$fila['pk_usuario']?>"><i title="Eliminar" class="bi bi-trash"></i>
					</a>
					</td>
				<?php
					}
				?>

				<?php 
					if($_SESSION['tipo']==2) {
				?>
					<td>
					<a href="editar_usuario.php?pk_usuario=<?=$fila['pk_usuario']?>">
					<i title="Editar" class="bi bi-pencil"></i>
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