<?php
header("Content-Type: application/xls");
header("Content-Disposition: inline; filename=ventas.xls");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th></th>
                <th>Nombre Pasajero</th>
                <th>Correo electrónico</th>
                <th>Teléfono</th>
                <th>Total</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require '../../vendor/autoload.php';
            $venta = new conexion\Venta;
            $info_venta = $venta->mostrar();

            $cantidad = count($info_venta);
            if ($cantidad > 0) {
                $c = 0;
                for ($x = 0; $x < $cantidad; $x++) {
                    $c++;
                    $item = $info_venta[$x];

            ?>
                    <tr>
                        <td><?php print $c ?></td>
                        <td><?php print $item['nombre'] . ' ' . $item['apellidos'] ?></td>
                        <td><?php print $item['correo'] ?></td>
                        <td><?php print $item['telefono'] ?></td>
                        <td><?php print $item['total'] ?> CLP</td>
                        <td><?php print $item['fecha'] ?></td>
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
</body>
</html>