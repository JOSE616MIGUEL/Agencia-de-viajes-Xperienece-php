<?php

$html = '';
//detalle de la venta
$html .= '
<img src="../../imagenes/logo_2.jpg" class="img-profile rounded-circle" with="70px" height="70px" alt="">
<br/>
<h1>Detalle de la venta</h1>
<table>
	<thead>
	    <tr>
			<th>Número</th>
			<th>Nombre tour</th>
			<th>Precio</th>
	    </tr>
  </thead>
   <tbody>';
$link = mysqli_connect("localhost", "root", "", "xperience");
$noo = 1;
$qq = "SELECT 
dv.id,
t.nombre,
dv.precio
FROM `detalle_venta` dv
INNER JOIN `tour` t ON t.id= dv.tour_id
WHERE dv.venta_id = dv.venta_id";
$ress = mysqli_query($link, $qq);
$roww = mysqli_num_rows($ress);
if ($roww > 0) {
	while ($roww = mysqli_fetch_assoc($ress)) {
		$html .= '<tr align="center">
		<td>' . $noo . '</td>
	    <td>' . $roww['nombre'] . '</td>
	    <td>' . $roww['precio'] . '</td>';
		$noo++;
	}
} else {
	$html .= '<tr aling="center"><td colspan="8">No Event</td></tr>';
}

$html .= '</tbody>
</table>';
//fin de la tabla datos de la venta
//datos de pasajero y total
$html .= '
<h1>Datos del pasajero</h1>
<table border="1">
	<thead>
	    <tr>
			<th>Número</th>
			<th>Nombre Pasajero</th>
			<th>Apellidos</th>
			<th>Correo Electrónico</th>
			<th>Teléfono</th>
	    </tr>
  </thead>
   <tbody>';
   require '../../vendor/autoload.php';
   $venta = new conexion\Venta;
   $info_venta = $venta->mostrar();
   
$link = mysqli_connect("localhost", "root", "", "xperience");
$no = 1;
$q = "SELECT * FROM venta WHERE id = " . $info_venta['id'] . "";
$res = mysqli_query($link, $q);
$row = mysqli_num_rows($res);
if ($row > 0) {
	while ($row = mysqli_fetch_assoc($res)) {
		$html .= '<tr align="center">
		<td>' . $no . '</td>
	    <td>' . $row['nombre'] . '</td>
	    <td>' . $row['apellidos'] . '</td>
	    <td>' . substr($row['correo'], 0, 200) . '</td>
	    <td>' . $row['telefono'] . '</td>
		</tr>
		</tbody>
</table>
		<br/>
		<br/>
		<br/>
		<h3>Fecha : ' . $row['fecha'] . '</h3>
		<h2>Total : ' . $row['total'] . '</h2>';
		$no++;
	}
} else {
	$html .= '<tr aling="center"><td colspan="8">No Event</td></tr>';
}
//fin de datos del pasajero y total
require_once __DIR__ . '/../../vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);
$mpdf->SetDisplayMode('fullpage');
$mpdf->WriteHTML($html);
$mpdf->Output( 'reporte.pdf', 'F' );
$mpdf->Output();
exit;
