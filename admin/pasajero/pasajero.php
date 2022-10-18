<?php
session_start();
if (!isset($_SESSION['usuario_info_array']) or empty($_SESSION['usuario_info_array']))
  header('Location: ../index.php');/*validación de para que no entre desde la barrar de búsqueda el archivo.php*/
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Panel - Pasajero</title>

  <!-- ruta de iconos del administrador-->
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
        <a class="nav-link" href="../dashboard.php">
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
                 <a class="collapse-item" href="vendedor.php">Vendedor</a>
              -->
              <a class="collapse-item" href="../tour/tour.php">Tour</a>
              <a class="collapse-item" href="pasajero.php">Pasajero</a>
              <!--
              <a class="collapse-item" href="proveedor.php">Proveedor</a>  
              -->
              <a class="collapse-item" href="../venta/venta.php">Venta</a>
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
                <!--<a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Configuración
                </a>-->
                <!--
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                -->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../cerrar-sesion.php" data-toggle="modal" data-target="#pregunta-salir">
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
          <h1 class="h3 mb-0 text-gray-800">Pasajero</h1>
          <a href="../excel/excel-pasajero.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Descargar excel</a>
        </div>

        <!-- Content Row -->
        <!-- Content Row -->


        <!-- Pie Chart -->

        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabla de datos</h6>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th> <a href="form-crear.php" class="btn btn-secondary btn-circle">
                          <img src="../../imagenes/iconos/crear.png" width="20px" height="20px" alt="" />
                        </a></th>
                      <th>Rut</th>
                      <th>Nombre</th>
                      <th>Apellidos</th>
                      <th>Telefono</th>
                      <th>Correo</th>
                      <th>Dirección</th>
                      <th>Edad</th>
                      <th>Nacionalidad</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    require '../../vendor/autoload.php';
                    $pasajero = new conexion\Pasajero;
                    $info_tour = $pasajero->mostrar();

                    $cantidad = count($info_tour);
                    if ($cantidad > 0) {
                      $c = 0;
                      for ($x = 0; $x < $cantidad; $x++) {
                        $c++;
                        $item = $info_tour[$x];

                    ?>
                        <tr>
                          <td><?php print $c ?></td>
                          <td><?php print $item['rut'] ?></td>
                          <td><?php print $item['nombre'] ?></td>
                          <td><?php print $item['apellidos'] ?></td>
                          <td><?php print $item['telefono'] ?></td>
                          <td><?php print $item['correo'] ?></td>
                          <td><?php print $item['direccion'] ?></td>
                          <td><?php print $item['edad'] ?></td>
                          <td><?php print $item['nacionalidad'] ?></td>
                          <td>
                            <a href="form-editar.php?id=<?php print $item['id']  ?>" class="btn btn-success btn-circle">
                              <img src="../../imagenes/iconos/actualizar.png" width="20px" height="20px" alt="" />
                            </a>
                          </td>
                          <td>
                            <a href="../acciones-pasajero.php?id=<?php print $item['id'] ?>" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#pregunta-eliminar">
                              <!--data-target y data-toggler con su id para generar pregunta-->
                              <img src="../../imagenes/iconos/eliminar.png" width="20px" height="20px" alt="">
                            </a>
                          </td>
                        </tr>
                      <?php
                      }
                    } else {

                      ?>
                      <tr>
                        <td colspan="6">NO HAY REGISTROS</td>
                      </tr>

                    <?php } ?>

                  </tbody>
                </table>
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

  <!-- pregunta si desea salir del sitio-->
  <div class="modal fade" id="pregunta-salir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

  <!-- pregunta si desea eliminar el tour-->
  <div class="modal fade" id="pregunta-eliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Realmente quieres eliminar el pasajero?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Presione aceptar para confirmar.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="../acciones-pasajero.php?id=<?php print $item['id'] ?>">Aceptar</a>
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