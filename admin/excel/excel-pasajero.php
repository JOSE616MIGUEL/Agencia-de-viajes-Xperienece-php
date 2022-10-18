<?php
header("Content-Type: application/xls");
header("Content-Disposition: inline; filename=pasajeros.xls");
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
                      if($cantidad > 0){
                        $c=0;
                      for($x =0; $x < $cantidad; $x++){
                        $c++;
                        $item = $info_tour[$x];

                      ?>
                      <tr>
                        <td><?php print $c?></td>
                        <td><?php print $item['rut']?></td>
                        <td><?php print $item['nombre']?></td>
                        <td><?php print $item['apellidos']?></td>
                        <td><?php print $item['telefono']?></td>
                        <td><?php print $item['correo']?></td>
                        <td><?php print $item['direccion']?></td>
                        <td><?php print $item['edad']?></td>
                        <td><?php print $item['nacionalidad']?></td>
                      </tr>
                      <?php
                      }
                    }else{

                    ?>
                    <tr>
                      <td colspan="6">NO HAY REGISTROS</td>
                    </tr>

                    <?php }?>
                  
                    </tbody>
                  </table>
</body>
</html>