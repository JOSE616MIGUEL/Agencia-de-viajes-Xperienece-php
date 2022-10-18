<?php
require '../vendor/autoload.php';
$venta = new conexion\Venta;

if($_SERVER['REQUEST_METHOD'] ==='GET'){

    $id = $_GET['id'];

    $rpt = $venta->eliminar($id);
    
    if($rpt)
        header('Location: venta/venta.php');
    else
        print 'Error al eliminar la venta';

}
?>