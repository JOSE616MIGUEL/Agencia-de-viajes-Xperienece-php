<?php
require '../vendor/autoload.php';
$tour = new conexion\Tour;
//valida la optención de datos
if($_SERVER['REQUEST_METHOD'] ==='POST'){

    //valida si lo datos son corectos
    if ($_POST['accion']==='Registrar'){
        //trae los datos ingresados
        if(empty($_POST['codigo']))
        exit('Completar codigo'); 

        if(empty($_POST['nombre']))
            exit('Completar nombre');

        if(!is_numeric($_POST['preciogeneral']))
            exit('Completar precio');

        if(empty($_POST['horasalida']))
            exit('Seleccionar una hora de salida');

        if(empty($_POST['horallegada']))
            exit('Seleccionar una hora llegada');
        
        if(empty($_POST['itinerario']))
            exit('Completar itinerario');
        
        if(empty($_POST['general']))
            exit('Completar descripcion general');

        //crea el array list
        $_params = array(
            'codigo'=>$_POST['codigo'],
            'foto'=> subirFoto(),
            'nombre'=>$_POST['nombre'],
            'preciogeneral'=>$_POST['preciogeneral'],
            'horasalida'=>$_POST['horasalida'],
            'horallegada'=>$_POST['horallegada'],
            'itinerario'=>$_POST['itinerario'],
            'general'=>$_POST['general']
        );

        $rpt = $tour->registrar($_params);

        //redirecciona
        if($rpt){   
            header("Location: tour/tour.php");    
           
        }else{
            print 'Error al registrar el tour';
        }
    }

    if ($_POST['accion']==='Actualizar'){

            //trae los datos ingresados
            if(empty($_POST['codigo']))
            exit('Completar codigo'); 
    
            if(empty($_POST['nombre']))
                exit('Completar nombre');
    
            if(!is_numeric($_POST['preciogeneral']))
                exit('Completar precio');
    
            if(empty($_POST['horasalida']))
                exit('Seleccionar una hora de salida');
    
            if(empty($_POST['horallegada']))
                exit('Seleccionar una hora llegada');
            
            if(empty($_POST['itinerario']))
                exit('Completar itinerario');
            
            if(empty($_POST['general']))
                exit('Completar descripcion general');

        //crea el array list
        $_params = array(
            'codigo' => $_POST['codigo'],
            'nombre' => $_POST['nombre'],
            'preciogeneral' => $_POST['preciogeneral'],
            'horasalida' => $_POST['horasalida'],
            'horallegada' => $_POST['horallegada'],
            'itinerario' => $_POST['itinerario'],
            'general' => $_POST['general'],
            'id'=>$_POST['id'],
        );

        if (!empty($_POST['foto_temp']))
            $_params['foto'] = $_POST['foto_temp'];

        if (!empty($_FILES['foto']['name']))
            $_params['foto'] = subirFoto();

        $rpt = $tour->actualizar($_params);
        //redirecciona 
        if($rpt)
        header('Location: tour/tour.php');

        else
        print 'Error al actualizar el tour';

        }
    
}
if($_SERVER['REQUEST_METHOD'] ==='GET'){

    $id = $_GET['id'];

    $rpt = $tour->eliminar($id);
    
    if($rpt)
        header('Location: tour/tour.php');
    else
        print 'Error al eliminar el tour';


}
// acciones de tour

function subirFoto() {

    $carpeta = __DIR__.'../../imagenes/tour/';//crear la ruta del directorio de acceso para guardar la imagenes

    $archivo = $carpeta.$_FILES['foto']['name'];

    move_uploaded_file($_FILES['foto']['tmp_name'],$archivo);

    return $_FILES['foto']['name'];

}
