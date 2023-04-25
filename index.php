<?php
include("menu.php");
include("clases/Pelicula.php");
$pelicula=new Pelicula();
$registros=$pelicula->mostrar();
$registros_accion=$pelicula->mostrar_accion();
$registros_CF=$pelicula->mostrar_ciencia_ficcion();
$registros_fantasia=$pelicula->mostrar_fantasia();
$registros_terror=$pelicula->mostrar_terror();
$registros_comedia=$pelicula->mostrar_comedia();
$registros_recientes=$pelicula->mostrar_recientes();
?>
  <style>
  * {
    box-sizing: border-box;
  }

  .column {
    float: left;
    width: 33.33%;
    padding: 5px;
  }


  .row::after {
    content: "";
    clear: both;
    display: table;
  }
  </style>
  <br><br>

  <div class="row">

    <br><br>
    <h1 class="titulo" align="center">RECIENTES</h1>
    <br><br><br><br><br><br><br><br>
   <?php  
      while($fila=mysqli_fetch_array($registros_recientes)) {
   ?>
    <div class="column">&nbsp &nbsp &nbsp &nbsp &nbsp
      <a href="<?=$fila['url']?>">
        <img src="img/<?=$fila['portada']?>" style="width:79%">
      </a>

    </div>

  <?php 
     }

    ?>

    </div>
  <br><br>
  <h1 class="titulo" align="center">PELICULAS</h1>
  <br><br>

  <br><br>
  <h1 id="accion" class="tam">&nbsp &nbsp Acción</h1>
  <br>

  <div class="main-carousel" >
   <?php  
      while($fila=mysqli_fetch_array($registros_accion)) {
   ?>
    <div class="cell">
      <a href="<?=$fila['url']?>"><img src="img/<?=$fila['portada']?>">
      </a>
    </div>
   <?php 
     }

    ?>
  </div>



  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script type="text/javascript">
      $('.main-carousel').flickity({

    cellAlign: 'left',
    wrapAround: true,
    freeScroll: true
  });
  </script><br>

  <br><br>
  <h1 id="ciencia_ficcion" class="tam">&nbsp &nbsp Ciencia ficción</h1>
  <br>
  <div class="main-carousel">
    <?php  
      while($fila=mysqli_fetch_array($registros_CF)) {
   ?>
    <div class="cell">
      <a href="<?=$fila['url']?>"><img src="img/<?=$fila['portada']?>">
      </a>
  
  </div>
    <?php 
     }

    ?>
 </div>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script type="text/javascript">
      $('.main-carousel').flickity({

    cellAlign: 'left',
    wrapAround: true,
    freeScroll: true
  });
  </script><br>

  <br><br>
  <h1 id="fantasia" class="tam">&nbsp &nbsp Fantasía</h1>
  <br>
  <div class="main-carousel">
    <?php  
      while($fila=mysqli_fetch_array($registros_fantasia)) {
   ?>
    <div class="cell">
        <a href="<?=$fila['url']?>"><img src="img/<?=$fila['portada']?>">
      </a>
      
    </div>
     <?php 
     }
    ?>
   
  </div>

  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script type="text/javascript">
      $('.main-carousel').flickity({

    cellAlign: 'left',
    wrapAround: true,
    freeScroll: true
  });
  </script><br>

  <br><br>
  <h1 id="terror" class="tam">&nbsp &nbsp Terror<h1/>
  <br>
  <div class="main-carousel">
    <?php  
      while($fila=mysqli_fetch_array($registros_terror)) {
   ?>
    <div class="cell">
      <a href="<?=$fila['url']?>"><img src="img/<?=$fila['portada']?>">
      </a>
     
    </div>
     <?php 
     }
    ?>
    
  </div>

  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script type="text/javascript">
      $('.main-carousel').flickity({

    cellAlign: 'left',
    wrapAround: true,
    freeScroll: true
  });
  </script><br>

  <br><br>
  <h1 id="comedia" class="tam">&nbsp &nbsp Comedia<h1/>
  <br>
  <div class="main-carousel">
     <?php  
      while($fila=mysqli_fetch_array($registros_comedia)) {
   ?>
    <div class="cell">
           <a href="<?=$fila['url']?>"><img src="img/<?=$fila['portada']?>">
      </a>
    </div>
     <?php 
     }
    ?>
    
  </div>

  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script type="text/javascript">
      $('.main-carousel').flickity({

    cellAlign: 'left',
    wrapAround: true,
    freeScroll: true
  });
  </script><br>


  <br><br>


<style>
footer {
  text-align: center;
  padding: 3px;
  background-color: ;
  color: white;
  font-size: 11px;
}

.tama {
  font-size: 25px;
  color: white;
}
</style>

<footer>
  <a href="index.php"><img align="center" src="img/Pelipop.png" width="150px" align="center"></a>
  <p><br>
  © Pelipop. Movies are property of their respective owners. Pelipop Inc. Headquarters are in Rosario, Sinaloa, México <br><br> pelipop845@gmail.com </p>
  <a href="https://www.facebook.com/Pelipop-106060528862453/"><i class="bi bi-facebook tama"></i></a>
  &nbsp &nbsp &nbsp &nbsp &nbsp
  <a href="https://twitter.com/Peli_pop"><i class="bi bi-twitter tama"></i></a>
  &nbsp &nbsp &nbsp &nbsp &nbsp
  <a href="https://www.instagram.com/p_e_l_i_p_o_p/"><i class="bi bi-instagram tama"></i></a>
  &nbsp &nbsp &nbsp &nbsp &nbsp
  <a href="https://www.youtube.com/watch?v=xm3YgoEiEDc"><i class="bi bi-whatsapp tama"></i></a>
</footer>