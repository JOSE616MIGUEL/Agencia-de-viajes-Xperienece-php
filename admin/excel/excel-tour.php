<?php
header("Content-Type: application/xls");
header("Content-Disposition: inline; filename=tour.xls");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th> <a href="form-crear.php" class="btn btn-secondary btn-circle">
                    </a></th>
                <th>Código</th>
                <th>Nombre</th>
                <th>Precio general</th>
                <th>Hora salida</th>
                <th>Hora llegada</th>
                <th>Descripción</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            require '../../vendor/autoload.php';
            $tour = new conexion\Tour;
            $info_tour = $tour->mostrar();

            $cantidad = count($info_tour);
            if ($cantidad > 0) {
                $c = 0;
                for ($x = 0; $x < $cantidad; $x++) {
                    $c++;
                    $item = $info_tour[$x];

            ?>
                    <tr>
                        <td><?php print $c ?></td>
                        <td><?php print $item['codigo'] ?></td>
                        <td><?php print $item['nombre'] ?></td>
                        <td><?php print $item['preciogeneral'] ?></td>
                        <td><?php print $item['horasalida'] ?></td>
                        <td><?php print $item['horallegada'] ?></td>
                        <td><?php print $item['descripcionitinerario'] ?></td>
                        <td>
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
</html>