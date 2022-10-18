<?php
require '../vendor/autoload.php';
$pasajero = new conexion\Pasajero;
//valida la optención de datos
if($_SERVER['REQUEST_METHOD'] ==='POST'){

    //valida si lo datos son corectos
    if ($_POST['accion']==='Registrar'){
        //trae los datos ingresados
        if(empty($_POST['rut']))
        exit('Completar rut'); 

        if(empty($_POST['nombre']))
            exit('Completar nombre');

        if(empty($_POST['apellidos']))
            exit('Completar apellidos');

        if(empty($_POST['telefono']))
            exit('Seleccionar telefono');

        if(empty($_POST['correo']))
            exit('Seleccionar correo');
        
        if(empty($_POST['direccion']))
            exit('Completar direccion');
        
        if(!is_numeric($_POST['edad']))
            exit('Completar edad');
        
        if(empty($_POST['nacionalidad']))
            exit('Completar nacionalidad');

        //crea el array list
        $_params = array(
            'rut'=>$_POST['rut'],
            'nombre'=>$_POST['nombre'],
            'apellidos'=>$_POST['apellidos'],
            'telefono'=>$_POST['telefono'],
            'correo'=>$_POST['correo'],
            'direccion'=>$_POST['direccion'],
            'edad'=>$_POST['edad'],
            'nacionalidad'=>$_POST['nacionalidad'],
        );

        $rpt = $pasajero->registrar($_params);

        //redirecciona hacia peliculas/indes.php sino error
        if($rpt){   
            header("Location: finalizar-contacto.php");    
           
        }else{
            print 'Error al registrar el pasajero';
        }
    }
}
?>
