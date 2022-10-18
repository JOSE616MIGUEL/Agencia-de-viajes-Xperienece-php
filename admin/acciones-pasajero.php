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

        //redirecciona
        if($rpt){   
            header("Location: pasajero/pasajero.php");    
           
        }else{
            print 'Error al registrar el pasajero';
        }
    }

    if ($_POST['accion']==='Actualizar'){

            //trae los datos ingresados
            if(empty($_POST['rut']))
            exit('Completar rut'); 
    
            if(empty($_POST['nombre']))
                exit('Completar nombre');

            if(empty($_POST['apellidos']))
                exit('Completar apellidos');
            
            if(empty($_POST['telefono']))
                exit('Completar teléfono');
            
            if(empty($_POST['correo']))
                exit('Completar correo');
            
            if(empty($_POST['direccion']))
                exit('Completar direccion');
            
            if(!is_numeric($_POST['edad']))
                exit('Completar edad');
    
            if(empty($_POST['nacionalidad']))
                exit('completar nacionalidad');
    
        //crea el array list
        $_params = array(
            'rut' => $_POST['rut'],
            'nombre' => $_POST['nombre'],
            'apellidos' => $_POST['apellidos'],
            'telefono' => $_POST['telefono'],
            'correo' => $_POST['correo'],
            'direccion' => $_POST['direccion'],
            'edad' => $_POST['edad'],
            'nacionalidad' => $_POST['nacionalidad'],
            'id'=>$_POST['id'],
        );
        $rpt = $pasajero->actualizar($_params);
        //redirecciona
        if($rpt)
        header('Location: pasajero/pasajero.php');

        else
        print 'Error al actualizar el pasajero';

        }
    
}
if($_SERVER['REQUEST_METHOD'] ==='GET'){

    $id = $_GET['id'];

    $rpt = $pasajero->eliminar($id);
    
    if($rpt)
        header('Location: pasajero/pasajero.php');
    else
        print 'Error al eliminar el tour';


}
?>
