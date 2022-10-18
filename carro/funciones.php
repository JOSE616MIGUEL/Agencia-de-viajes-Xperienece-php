<?php


function agregarTour($resultado, $id, $cantidad = 1){
    //creación del array
    $_SESSION['carrito1'][$id] = array(
        'id' => $resultado['id'],
        'nombre' => $resultado['nombre'],
        'foto' => $resultado['foto'],
        'preciogeneral' => $resultado['preciogeneral'],
        'cantidad' => $cantidad
   );


}
/*
function actualizarProducto($id,$cantidad = FALSE){

    if($cantidad)
        $_SESSION['carrito1'][$id]['cantidad'] = $cantidad;
    else
        $_SESSION['carrito1'][$id]['cantidad']+=1;
}
*/
function calcularTotal(){
    $total = 0;
    if(isset($_SESSION['carrito1'])){
        foreach($_SESSION['carrito1'] as $indice => $value){
            $total += $value['preciogeneral'];
        }
    }
    return $total;
}

function cantidadTour(){
    $cantidad = 0;
    if(isset($_SESSION['carrito1'])){
        foreach($_SESSION['carrito1'] as $indice => $value){
           $cantidad++;
        }
    }

    return $cantidad;
}
?>