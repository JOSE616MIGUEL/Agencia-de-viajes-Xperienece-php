<?php
//ACTIVAR LAS SESSIONES EN PHP
session_start();
require 'funciones.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    require '../vendor/autoload.php';
    $tour = new conexion\Tour;
    $resultado = $tour->mostrarPorId($id);

    if (!$resultado)
        header('Location: index.php');

    if (isset($_SESSION['carrito1'])) { //SI EL CARRITO EXISTE
        
            //  SI EL CARRITO NO EXISTE EN EL CARRITO
            agregarTour($resultado, $id);
        
    } else {
        //  SI EL CARRITO NO EXISTE
        agregarTour($resultado, $id);
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xperience chile - galería</title>
  <link rel="shortcut icon" href="../imagenes/logo_2.jpg" type="image/x-icon">
  <!--servicios externos de boot-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <!--servicios externos de logos-->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <!--estilos personalizado del menú-->
  <link rel="stylesheet" href="../estilo/estilo-menu.css">
  <!--estilos personalizados-->
  <link rel="stylesheet" href="../estilo/estilo-footer.css" rel="stylesheet" type="text/css">
  
</head>

<body>
   <!--Inicio del menú-->
   <nav class="navbar navbar-expand-lg navbar fixed-top">
    <a class="navbar-brand" href="#"><img src="../imagenes/logo.jpeg" alt="" width="70px" height="50px"></a>
    <h4 class="text-white">Xperience</h4>
    <!--icono para adaptar en el movil el menú-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <img class="icono-adaptable" src="imagenes/iconos/menu.png" width="50px" height="50px">
    </button>
    <div class="collapse navbar-collapse nav justify-content-end" id="navbarNav" class="menu">
      <ul class="navbar-nav">
        <li class="nav-item">
          <!--iconos de carro de compras-->
          <a href="index.php"><img src="../imagenes/iconos/carro-compra.png" alt="" width="40px" height="40px"></a>
          <span class="text-white"><?php print cantidadTour(); ?></span>
        </li>
      </ul>
    </div>
  </nav>
  <!--fin del menú-->
  <br>
  <br>
  <br>
  <br>
  <br>
  <!--saltos de líneas por la fixed-top-->
  <!--container-->
  <div class="container">
  <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th><a href="../tour.php"><img src="../imagenes/iconos/volver.png" width="50px" height="50px" />Volver</a></th>
                    <th>Tour</th>
                    <th>Foto</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_SESSION['carrito1']) && !empty($_SESSION['carrito1'])) {
                    $c = 0;
                    foreach ($_SESSION['carrito1'] as $indice => $value) {
                        $c++;
                        $total = $value['preciogeneral'];
                ?>
                        <tr>
                            <form action="actualizar_carrito.php" method="post">
                                <td><?php print $c ?></td>
                                <td><?php print $value['nombre']  ?></td>
                                <td>
                                    <?php
                                    $foto = '../imagenes/tour/' . $value['foto'];
                                    if (file_exists($foto)) {
                                    ?>
                                        <img src="<?php print $foto; ?>" width="300px" height="300px">
                                    <?php } else { ?>
                                        <img src="assets/imagenes/not-found.jpg" width="300px" height="300px">
                                    <?php } ?>
                                </td>
                                <td><?php print $value['preciogeneral']  ?> CLP</td>
                                    <input type="hidden" name="id" value="<?php print $value['id'] ?>">
                                <td>
                                    <a href="eliminar-carro.php?id=<?php print $value['id']  ?>" class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-trash"><img src="../imagenes/iconos/eliminar.png" width="35px" height="35px"/></span>
                                    </a>
                                </td>
                            </form>
                        </tr>

                    <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="7">NO HAY PRODUCTOS EN EL CARRITO</td>

                    </tr>
                <?php
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" class="text-right">Total
                    <?php print calcularTotal(); ?> CLP</td>
                </tr>
            </tfoot>
        </table>
        <hr>
        <?php
        if (isset($_SESSION['carrito1']) && !empty($_SESSION['carrito1'])) {
        ?>
            <div class="row">
                <div class="pull-right">
                    <a href="solicita-datos.php" class="btn btn-primary">Finalizar Compra</a>
                </div>
            </div>
    </div>
<?php
        } else {
?>
    
<?php

        }
?>
  </div>
  <br>
  <br>
</body>
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