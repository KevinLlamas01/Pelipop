<?php
session_start();

if (!isset($_SESSION['pk_usuario'])) {
  header("location: formulario_inicio_sesion.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>P E L I P O P</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css?a=32">
  <link rel="stylesheet" type="text/css" href="css/estilo.css?a=32">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>

    <link href="img/pop.ico" rel="icon">
</head>

<body>

  <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <img src="img/Pelipop.png" width="150px">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <a class="nav-link" id="margen" href="index.php"><i class="bi bi-house"></i> INICIO</a>

        <li class="nav-item dropdown">

          <a class="nav-link dropdown-toggle" id="margen" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-film"></i> GENEROS</a>

          <ul class="dropdown-menu" aria-labelledby="genero">
            <li><a class="dropdown-item" href="accion.php">Acción</a></li>
            <li><a class="dropdown-item" href="ciencia_ficcion.php">Ciencia Ficción</a></li>
            <li><a class="dropdown-item" href="fantasia.php">Fantasía</a></li>
            <li><a class="dropdown-item" href="terror.php">Terror</a></li>
            <li><a class="dropdown-item" href="comedia.php">Comedia</a></li>
          </ul>
        </li>

        <?php
          if ($_SESSION['tipo']==1) {
        ?>
          <li class="nav-item dropdown">

          <a class="nav-link dropdown-toggle" id="margen" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-clipboard2-plus"></i> AÑADIR</a>

          <ul class="dropdown-menu" aria-labelledby="genero">
            <li><a class="dropdown-item" href="formulario_peliculas.php">Peliculas</a></li>
            <li><a class="dropdown-item" href="formulario_actores.php">Actores</a></li>
            <li><a class="dropdown-item" href="formulario_directores.php">Directores</a></li>
            <li><a class="dropdown-item" href="formulario_favoritos.php">Favoritos</a></li>
            <li><a class="dropdown-item" href="formulario_genero.php">Generos</a></li>
          </ul>
        </li>
        <?php
          }
        ?>

        <li class="nav-item dropdown">

          <a class="nav-link dropdown-toggle" id="margen" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-clipboard"></i> LISTAS</a>

          <ul class="dropdown-menu" aria-labelledby="genero">
            <li><a class="dropdown-item" href="lista_usuarios.php">Usuarios</a></li>
            <li><a class="dropdown-item" href="lista_peliculas.php">Peliculas</a></li>
            <li><a class="dropdown-item" href="lista_actores.php">Actores</a></li>
            <li><a class="dropdown-item" href="lista_directores.php">Directores</a></li>
            <li><a class="dropdown-item" href="lista_favoritos.php">Favoritos</a></li>
            <li><a class="dropdown-item" href="lista_generos.php">Generos</a></li>
          </ul>
        </li>


        <a class="nav-link" id="margen"><i class="bi bi-person-check"></i> <?php echo $_SESSION['nom_usuario']; ?></a>
        <a class="nav-link" id="margen" href="funciones/cerrar_sesion.php"><i class="bi bi-door-open"></i> CERRAR SESIÓN</a>

      </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Buscar película" aria-label="Buscar">
          <button class="btn btn-outline-light" type="submit"><i title="Buscar" class="bi bi-search"></i></button>
        </form>
    </div>
  </div>
</nav>

</body>
</html>