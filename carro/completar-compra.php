<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require 'funciones.php';
    require '../vendor/autoload.php';
    if (isset($_SESSION['carrito1']) && !empty($_SESSION['carrito1'])) {
        $venta = new conexion\Venta;
        date_default_timezone_set('America/Santiago');
        $_params = array(
            'nombre' => $_POST['nombre'],
            'apellidos' => $_POST['apellidos'],
            'correo' => $_POST['correo'],
            'telefono' => $_POST['telefono'],
            'total' => calcularTotal(),
            'fecha' => date('Y-m-de')
        );

        $venta_id = $venta->registrar($_params);

        foreach($_SESSION['carrito1'] as $indice => $value){
            $_params = array(
                "venta_id" => $venta_id,
                "tour_id" => $value['id'],
                "preciogeneral" => $value['preciogeneral'],
                "cantidad" => $value['cantidad'],
            );

            $venta->registrarDetalle($_params);
        }

        $_SESSION['carrito1'] = array();

        header('Location: gracias-compra.php');
    }
}
/*
print '<pre>';
print_r($_POST);
código para apreciar si lo datos ingresados se devuelven*/

?>