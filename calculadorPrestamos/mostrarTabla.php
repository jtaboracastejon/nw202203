<?php
session_start();
require_once "Lib/Prestamo.php";

$arrPrestamos = array();

$strNombreCliente = "";
$intplazoAnios = 0;
$monto = 0.00;
$tasaInteresAnual = 0;


if (isset($_SESSION["prestamos"])) {
    $arrPrestamos = $_SESSION["prestamos"];
    $key = $_GET["key"];
    $strNombreCliente = $arrPrestamos[$key]["nombreCliente"];
    $intplazoAnios = $arrPrestamos[$key]["periodoAnios"];
    $tasaInteresAnual = $arrPrestamos[$key]["tasaInterés"];
    $monto = $arrPrestamos[$key]["capitalPrestado"];

    $calcular = new Prestamo($strNombreCliente, $intplazoAnios, $monto, $tasaInteresAnual);

    $cuota = $calcular->calcularCuota();
    $tabla = $calcular->generarTablaAmortizada();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Tabla</title>
</head>

<body>
    <a href="prestamosList.php">Volver al Listado</a>
    <table cellpadding="10">
        <thead>
            <th>Nombre del Cliente</th>
            <th>Tasa de Interes</th>
            <th>Cuota</th>
            <th>Periodo Años</th>
            <th>Periodo Meses</th>
            <th>Capital Prestado</th>

        </thead>
        <tbody>
            <tr>
                <td><?php echo $strNombreCliente ?></td>
                <td><?php echo $tasaInteresAnual ?></td>
                <td><?php echo $cuota ?></td>
                <td><?php echo $intplazoAnios ?></td>
                <td><?php echo $intplazoAnios*12 ?></td>
                <td>L. <?php echo number_format($monto) ?></td>
            </tr>
        </tbody>
    </table>
    <table cellpadding="10" border="1">
        <thead>
            <th>No Cuota</th>
            <th>Capital Amortizado</th>
            <th>Interes</th>
            <th>cuota</th>
            <th>Capital Pendiente</th>
        </thead>
        <tbody>
            <?php
            foreach ($tabla as $fila) {
            ?>
                <tr>
                    <td><?php echo $fila["numeroCuota"] ?></td>
                    <td>L. <?php echo number_format($fila["capitalAmortizado"], 2) ?></td>
                    <td>L. <?php echo number_format($fila["interes"], 2) ?></td>
                    <td>L. <?php echo number_format($fila["cuota"], 2) ?></td>
                    <td>L. <?php echo number_format($fila["capitalPendiente"], 2) ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>