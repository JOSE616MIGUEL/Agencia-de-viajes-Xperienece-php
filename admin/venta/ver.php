
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Panel - Venta</title>

    <!-- ruta de iconos del administrador-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template

-->
    <link href="../../estilo/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../imagenes/logo_2.jpg" type="image/x-icon">
</head>

<body>
    <!-- Main Content -->
    <div id="content">
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">



            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <fieldset>
                            <?php
                            require '../../vendor/autoload.php';
                            $id = $_GET['id'];
                            $venta = new conexion\Venta;

                            $info_venta = $venta->mostrarPorId($id);

                            $info_detalle_venta = $venta->mostrarDetallePorIdPedido($id);

                            ?>


                            <legend>Información de la Compra</legend>
                            <div class="form-group">
                                <label>Nombre</label>
                                <input value="<?php print $info_venta['nombre'] ?>" type="text" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Apellidos</label>
                                <input value="<?php print $info_venta['apellidos'] ?>" type="text" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Correo electrónico</label>
                                <input value="<?php print $info_venta['correo'] ?>" type="text" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Teléfono</label>
                                <input value="<?php print $info_venta['telefono'] ?>" type="text" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Fecha</label>
                                <input value="<?php print $info_venta['fecha'] ?>" type="text" class="form-control" readonly>
                            </div>



                            <hr>
                            Tour Comprados
                            <hr>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Foto</th>
                                        <th>Precio</th>
                                        <th>
                                            Total
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php


                                    $cantidad = count($info_detalle_venta);
                                    if ($cantidad > 0) {
                                        $c = 0;
                                        for ($x = 0; $x < $cantidad; $x++) {
                                            $c++;
                                            $item = $info_detalle_venta[$x];
                                            $total = $item['precio'];
                                    ?>


                                            <tr>
                                                <td><?php print $c ?></td>
                                                <td><?php print $item['nombre'] ?></td>
                                                <td>
                                                    <?php
                                                    $foto = '../../imagenes/tour/' . $item['foto'];
                                                    if (file_exists($foto)) {
                                                    ?>
                                                        <img src="<?php print $foto; ?>" width="200px" height="200px">
                                                    <?php } else { ?>
                                                        <h1>SIN FOTO</h1>
                                                    <?php } ?>
                                                </td>
                                                <td><?php print $item['precio'] ?> CLP</td>
                                                <td>
                                                    <?php print $total ?>
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
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Total Compra</label>
                                    <input value="<?php print $info_venta['total'] ?>" type="text" class="form-control" readonly>
                                </div>
                            </div>

                        </fieldset>
                        <div class="pull-left">
                            <a href="venta.php" class="btn btn-default hidden-print">Salir</a>
                        </div>
                        <!--
                        <div class="pull-right">
                            <button href="javascript:;" id="btnImprimir"class="btn btn-danger hidden-print">Imprimir</button>
                        </div>
                        -->
                    </div>
                </div>

            </div>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    </body>
</html>