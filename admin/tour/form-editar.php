<?php
session_start();
if (!isset($_SESSION['usuario_info_array']) or empty($_SESSION['usuario_info_array']))
  header('Location: ../index.php');/*validación de para que no entre desde la barrar de búsqueda el archivo.php*/
require '../../vendor/autoload.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
  $id = $_GET['id'];

  $tour = new conexion\Tour;
  $resultado = $tour->mostrarPorId($id);

  
  if (!$resultado)
    header('Location: index.php');
} else {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registro de tour</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../estilo/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../imagenes/logo_2.jpg" type="image/x-icon">

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../../index.php">
                <div class="sidebar-brand-icon">
                    <img src="../../imagenes/logo_2.jpg" class="img-profile rounded-circle" with="50px" height="50px" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">Administrador</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Panel de control</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <div class="btn-group-vertical">
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Configuración</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Administración:</h6>
                            <!--
                            <a class="collapse-item" href="../..vendedor.php">Vendedor</a>
                            <a class="collapse-item" href="../../tour.php">Tour</a>
                            <a class="collapse-item" href="../..pasajero.php">Pasajero</a>
                            <a class="collapse-item" href="../..proveedor.php">Proveedor</a>
                            <a class="collapse-item" href="../..venta.php">Venta</a>
                        </div>
                    </div>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <!-- Nav Item - Pages Collapse Menu -->

                <!-- Nav Item - Charts -->

                <!-- Nav Item - Tables -->

                <!-- Divider -->

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

                <!-- Sidebar Message -->
        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Search 
                <form
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                            aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
                -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>



                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php print $_SESSION['usuario_info_array']['nombre']; ?></span>
                                <img class="img-profile rounded-circle" src="../../imagenes/iconos/usuario.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <!--
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Configuración
                                </a>
                                -->
                                <!--
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Salir
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tour</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Descargar excel</a>
                    </div>

                    <!-- Content Row -->
                    <!-- Content Row -->


                    <!-- Pie Chart -->

                    <div class="container-fluid">

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">
                                    <a href="tour.php"><img src="../../imagenes/iconos/atras.png" alt=""width="30px" height="30px"></a>Formulario
                                </h6>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <form class="user" method="POST" action="../acciones-tour.php" enctype="multipart/form-data">
                                        <!--trae el id-->
                                        <input type="hidden" name="id" value="<?php print $resultado['id'] ?>">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" class="form-control form-control-user" id="exampleFirstName" name="codigo" value="<?php print $resultado['codigo'] ?>">
                                            </div>
                                            <div class="col-sm-6">
                                                <br>
                                                <label>Imagen</label>
                                                <input type="file" class="inputfile" name="foto" value="Ingrese imagen">
                                                <input type="hidden" name="foto_temp" value="<?php print $resultado['foto'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="exampleLastName" name="nombre" value="<?php print $resultado['nombre'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="number" class="form-control form-control-user" id="exampleInputEmail" name="preciogeneral" value="<?php print $resultado['preciogeneral'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" class="form-control form-control-user" id="exampleInputPassword" name="horasalida" value="<?php print $resultado['horasalida'] ?>">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control form-control-user" id="exampleRepeatPassword" name="horallegada" value="<?php print $resultado['horallegada'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <textarea type="text" class="form-control form-control-user" id="exampleRepeatPassword" name="itinerario"><?php print $resultado['descripcionitinerario'] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <textarea type="text" class="form-control form-control-user" id="exampleRepeatPassword" name="general"><?php print $resultado['descripciongeneral'] ?></textarea>
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" name="accion" value="Actualizar">
                                          
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; 2022</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿Realmente quieres salir?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Presione aceptar para confirmar.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-primary" href="../cerrar-sesion.php">Aceptar</a>
                    </div>
                </div>
            </div>
        </div>
</body>

<!-- Bootstrap core JavaScript-->
<script src="../../js/vendor/jquery/jquery.min.js"></script>
  <script src="../../js/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../js/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../../js/vendor/chart.js/Chart.min.js"></script>

</html>