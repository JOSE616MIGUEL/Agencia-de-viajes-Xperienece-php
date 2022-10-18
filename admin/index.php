<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = $_POST['nombre'];
    $clave = $_POST['clave'];
    $clave = md5($clave); //para guardar como md5 encritada la contraseña
    require '../vendor/autoload.php';
    $usuario = new conexion\Administrador;
    $resultado = $usuario->login($nombre, $clave);

    if ($resultado) {
        session_start();
        $_SESSION['usuario_info_array'] = array(
            //viene de tabla donde se realiza la consulta
            'nombre' => $resultado['nombre'],
            'estado' => 1
        );
        header('Location: dashboard.php');
    } else {
?>
         <!--imagen del icono de pestaña-->
        <link rel="shortcut icon" href="../imagenes/logo_2.jpg" type="image/x-icon">
        <div class="alert alert-dark" role="alert">
            Nombre de usuario o contraseña son incorrectos, intente nuevamente.
        </div>
<?php
        session_destroy ();
    }
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xperience - login</title>
    <!--imagen del icono de pestaña-->
    <link rel="shortcut icon" href="../imagenes/logo_2.jpg" type="image/x-icon">
    <!--servicios externos de bootstrap4 estilos-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--servicios internos personalizados de estilos-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../estilo/estilo-login.css">
</head>

<body>
    <div class="container">
        <section class="intro">
            <div class="mask d-flex align-items-center h-100 gradient-custom">
                <!--Incio de container-->
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-xl-10">
                            <div class="card">
                                <div class="card-body p-5">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-md-6 col-xl-7">
                                            <div class="text-center pt-md-5 pb-5 my-md-5">
                                                <img class="rounded-circle" src="../imagenes/logo_2.jpg" alt="" width="200px" height="200px">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-4 text-center">
                                            <h2 class="fw-bold-md-4 pb-2">
                                                Iniciar Sesión
                                            </h2>
                                            <form action="index.php" method="post">
                                                <div class="form-outline mb-3">
                                                    <input type="" id="typeEmail" class="form-control form-control-lg" name="nombre" required>
                                                    <label for="typeName" class="form-label">Nombre</label>
                                                </div>
                                                <div class="form-outline mb-4">
                                                    <input type="password" id="typeEmail" class="form-control form-control-lg" name="clave" required>
                                                    <label for="typePassword" class="form-label form-control-user">Contraseña</label>
                                                </div>
                                                <div class="text-center">
                                                    <button class="btn btn-primary btn-block btn-lg" data-toggle="modal" data-target="#notifica-error">Ingresar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- termina container -->
            </div>
        </section>
    </div>
</body>

</html>