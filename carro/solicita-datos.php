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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!--servicios externos de logos-->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!--estilos personalizado del menú-->
    <link rel="stylesheet" href="../estilo/estilo-menu.css">
    <!--estilos personalizados-->
    <link rel="stylesheet" href="../estilo/estilo-footer.css" rel="stylesheet" type="text/css">

</head>

<body>
    <!--container-->
    <div class="container">
        <br>
        <br>
    <a href="index.php"><img src="../imagenes/iconos/volver.png" width="50px" height="50px" />Volver</a>
        <form action="completar-compra.php" method="post">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" name="nombre" required>
            </div>
            <div class="form-group">
                <label>Apellidos</label>
                <input type="text" class="form-control" name="apellidos" required>
            </div>
            <div class="form-group">
                <label>Correo</label>
                <input type="email" class="form-control" name="correo" placeholder="ejemplo@gmail.com" required>
            </div>
            <div class="form-group">
                <label>Teléfono</label>
                <input type="text" class="form-control" name="telefono" required>
            </div>
            <button type="submit" class="btn btn-primary">Solicitar compra</button>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</html>