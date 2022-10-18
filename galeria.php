<?php
session_start();
require 'carro/funciones.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xperience chile - galería</title>
  <link rel="shortcut icon" href="imagenes/logo_2.jpg" type="image/x-icon">
  <!--servicios externos de boot-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <!--servicios externos de logos-->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <!--estilos personalizado del menú-->
  <link rel="stylesheet" href="estilo/estilo-menu.css">
  <!--estilos personalizados de galería-->
  <link href="estilo/estilo-zona-xperience.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="estilo/estilo-galeria.css">
  <!--estilos personalizados-->
  <link rel="stylesheet" href="estilo/estilo-footer.css" rel="stylesheet" type="text/css">

  
</head>

<body>
  <!--Inicio del menú-->
  <nav class="navbar navbar-expand-lg navbar nav-tabs fixed-top">
    <a class="navbar-brand" href="index.php"><img src="imagenes/logo.jpeg" alt="" width="70px" height="50px"></a>
    <h4 class="text-white">Xperience</h4>
    <!--icono para adaptar en el movil el menú-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <img class="icono-adaptable" src="imagenes/iconos/menu.png" width="50px" height="50px">
    </button>
    <div class="collapse navbar-collapse nav justify-content-end" id="navbarNav" class="menu">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link text-white tipografia-futura" href="index.php">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white tipografia-futura" href="galeria.php">Galería</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white tipografia-futura" href="tour.php">Tour</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white tipografia-futura" href="contacto.php">Contacto</a>
        </li>
        <li class="nav-item">
          <!--iconos de carro de compras-->
          <a href="carro/index.php"><img src="imagenes/iconos/carro-compra.png" alt="" width="40px" height="40px"></a>
          <span class="text-white"><?php print cantidadTour(); ?></span>
        </li>
      </ul>
    </div>
  </nav>
  <!--fin del menú-->
  <br>
  <br>
  <br>
  <!--saltos de líneas por la fixed-top-->
  <!--galería de cierre-->
  <div class="container">
    <!-- galería de imágenes
     <h1 class="text-info"><span>Zona de Xperience</span></h1>
    <div class="img-gallery">
      <img src="imagenes/galeria/imagen_galeria.jpg" onclick="openFulImg(this.src)" alt="">
      <img src="imagenes/galeria/imagen_galeria.jpg" onclick="openFulImg(this.src)" alt="">
      <img src="imagenes/galeria/imagen_galeria.jpg" onclick="openFulImg(this.src)" alt="">
      <img src="imagenes/galeria/imagen_galeria.jpg" onclick="openFulImg(this.src)" alt="">
      <img src="imagenes/galeria/imagen_galeria.jpg" onclick="openFulImg(this.src)" alt="">
      <img src="imagenes/galeria/imagen_galeria.jpg" onclick="openFulImg(this.src)" alt="">
      <img src="imagenes/galeria/imagen_galeria.jpg" onclick="openFulImg(this.src)" alt="">
      <img src="imagenes/galeria/imagen_galeria.jpg" onclick="openFulImg(this.src)" alt="">
      <img src="imagenes/galeria/imagen_galeria.jpg" onclick="openFulImg(this.src)" alt="">
    </div>
    -->
    <div class="feature">
      <figure class="featured-item image-holder r-3-2 transition"></figure>
    </div>
    
  <!-- Grid row -->
<div class="row">

  <!-- Grid column
    <div class="col-md-12 d-flex justify-content-center mb-5">

    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="all">All</button>
    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="1">Mountains</button>
    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="2">Sea</button>

  </div>
  
  -->
  <!-- Grid column -->

</div>
<!-- Grid row -->

<!-- Grid row -->
<div class="gallery" id="gallery">
  <div class="ful-img" id="fulImgBox">
    <img src="imagenes/img_1" id="fulImg" alt="">
    <span onclick="closeImg()">X</span>
  </div>
  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).webp" onclick="openFulImg(this.src)" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain1.webp" onclick="openFulImg(this.src)" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain2.webp" onclick="openFulImg(this.src)" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).webp" onclick="openFulImg(this.src)" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).webp" onclick="openFulImg(this.src)" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain3.webp" onclick="openFulImg(this.src)" alt="Card image cap">
  </div>
  <!-- Grid column -->
  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).webp" onclick="openFulImg(this.src)" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain1.webp" onclick="openFulImg(this.src)" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain2.webp" onclick="openFulImg(this.src)" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).webp" onclick="openFulImg(this.src)" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).webp" onclick="openFulImg(this.src)" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain3.webp" onclick="openFulImg(this.src)" alt="Card image cap">
  </div>
  <!-- Grid column -->
</div>
<!-- Grid row -->
<!--Fin galería-->
    
  </div>
  <!--Inicio del footer-->
  <footer class="footer-distributed" id="contacto_footer">
    <div class="footer-left">
      <h3>Xperience<span><img src="imagenes/logo.jpeg" alt="" width="50px" height="50px"></span></h3>
      <p class="footer-links">
        <a href="index.html" class="link-1">Inicio</a>

        <a href="galeria.html">Galería</a>

        <a href="tour.php">Tour</a>

        <a href="contacto.php">Contacto</a>
      </p>

      <p class="footer-company-name">Xperience © 2022</p>
    </div>
    <div class="footer-center">

      <div>
        <i class="fa fa-map-marker"></i>
        <p><span>#1084 Miguel Claro</span> Providencia, Santiago de Chile</p>
      </div>

      <div>
        <i class="fa fa-phone"></i>
        <p>+56950405961</p>
      </div>

      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:lissethmolleda.chilexperiece@gmail.com">lissethmolleda.chilexperiece@gmail.com</a></p>
      </div>

    </div>
    <div class="footer-right">

      <p class="footer-company-about">
        <span>Sobre la agencia</span>
        Transporte y Turismo.
        Giras de estudios, Rutas Turísticas, Ruta del Vino, Transfer Aeropuerto.
      </p>
      <div class="footer-icons">

        <a href="https://www.instagram.com/chile.experience_/"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100084435280034&is_tour_completed=true"><i
            class="bx bxl-facebook-circle "></i></a>
        <a href=""><i class="bx bxl-whatsapp"></i></a>

      </div>
    </div>
  </footer>
</body>
<script src="js/jquery.js"></script>
<script src="js/galeria.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
  integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
  integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</html>