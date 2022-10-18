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
  <!--
      <link rel="stylesheet" href="estilo/estilo.css">
    -->
  <!--icono superior-->
  <link rel="shortcut icon" href="imagenes/logo_2.jpg" type="image/x-icon">
  <!--servicios externos de boot-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <!--servicios externos de logos-->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <!--estilo general personalizado del sitio web-->
  <link rel="stylesheet" href="estilo/estilo-general-index.css" rel="stylesheet" type="text/css">
  <!--estilos personalizados-->
  <link rel="stylesheet" href="estilo/estilo-footer.css" rel="stylesheet" type="text/css">
  <!--estilos personalizados de galería-->
  <link href="estilo/estilo-zona-xperience.css" rel="stylesheet" type="text/css">
  <!--estilos personalizado del menú-->
  <link href="estilo/estilo-menu.css" rel="stylesheet" type="text/css">
  <title>Xperience chile</title>
</head>

<body>
  <!-- Video Source -->
  <!-- https://www.pexels.com/video/aerial-view-of-beautiful-resort-2169880/ 
  
  
  
  -->
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
  <div class="container">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="imagenes/avenue-ge9b723ef5_1280.jpg" onclick="openFulImg(this.src)" class="d-block w-100" alt="..."
            width="500px" height="400px">
        </div>
        <div class="carousel-item">
          <img src="imagenes/road-g7c9365fe6_1280.jpg" onclick="openFulImg(this.src)" class="d-block w-100" alt="..."
            width="500px" height="400px">
        </div>
        <div class="carousel-item">
          <img src="imagenes/tree-g06162ecdf_1280.jpg" onclick="openFulImg(this.src)" class="d-block w-100" alt="..."
            width="500px" height="400px">
        </div>
      </div>
      <!--botón anterior-->
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <!--botón siguiente-->
      <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
    </div>
    <!--fin de carrusel-->
    <!--card de introducción-->
    <div class="card text-center">
      <div class="card-header">
        Featured
      </div>
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
      <div class="card-footer text-muted">
        Conoce nuestra zona de experiencia
      </div>
    </div>
    <!--Galería-->
    <div class="container">
      <div class="ful-img" id="fulImgBox">
        <img src="" id="fulImg" alt="">
        <span onclick="closeImg()">X</span>
      </div>
      <!-- galería de zona experiencia-->
      <h1 class="text-info tipografia-blankit"><span>Zona de Xperience</span></h1>
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
      <!--Video de youtube-->
      <iframe width="560" height="500" src="https://www.youtube.com/embed/LnzV3FC5mYg" title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
      </iframe>
    </div>
    <div class="card text-center">
      <div class="card-header">
        Tour destacados
      </div>
      <div class="card-group">
        <div class="card">
          <img src="imagenes/road-g7c9365fe6_1280.jpg" class="card-img-top" id="cursor" alt="..."
            onclick="openFulImg(this.src)">
          <div class="card-body tipografia-futura">
            <h5 class="card-title">Titulo del tour</h5>
            <p class="card-text ">This is a wider card with supporting text below as a natural lead-in to additional
              content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            <button type="button" class="btn btn-outline-dark">Dark</button>
          </div>
        </div>
        <div class="card">
          <img src="imagenes/road-g7c9365fe6_1280.jpg" class="card-img-top" alt="..." onclick="openFulImg(this.src)">
          <div class="card-body tipografia-futura">
            <h5 class="card-title">titulo del tour</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            <button type="button" class="btn btn-outline-dark">Dark</button>
          </div>
        </div>
        <div class="card">
          <img src="imagenes/road-g7c9365fe6_1280.jpg" class="card-img-top" alt="..." onclick="openFulImg(this.src)">
          <div class="card-body tipografia-futura">
            <h5 class="card-title">titulo del tour</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
              content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            <button type="button" class="btn btn-outline-dark">Dark</button>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!--fin de container-->
  <!--Inicio del footer-->
  <footer class="footer-distributed" id="contacto_footer">
    <div class="footer-left">
      <h3>Xperience<span><img src="imagenes/logo.jpeg" alt="" width="50px" height="50px"></span></h3>
      <p class="footer-links">
        <a href="index.php" class="link-1">Inicio</a>

        <a href="galeria.php">Galería</a>

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
<script>

</script>
<script src="js/jquery.js"></script>
<script src="js/zona-experiencia.js"></script>
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