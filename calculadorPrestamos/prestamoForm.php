<?php

require_once "Lib/Prestamo.php";

$strNombreCliente="";
$intplazoAnios="";
$monto="";
$tasaInteresAnual="";
$tabla = array();
function setData(){
    global $strNombreCliente, $intplazoAnios, $monto, $tasaInteresAnual;
    $strNombreCliente = $_POST['txtNombreDelCliente'];
    $intplazoAnios = $_POST['txtPlazo'];
    $monto = $_POST['txtMonto'];
    $tasaInteresAnual = $_POST['txtTasaInteresAnual'];
    $calcular = new Prestamo($strNombreCliente, $intplazoAnios, $monto, $tasaInteresAnual);
    return $calcular;
}


if(isset($_POST['btnCalcular'])){
    $calcular = setData();
    $cuota = $calcular->calcularCuota();
    $tabla = $calcular->generarTablaAmortizada();
}

if(isset($_POST['btnGuardar'])){
    $calcular = setData();
    $calcular->guardarPrestamo();
    header("Location: prestamosList.php");
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Prestamo</title>
</head>

<body>
    <form action="prestamoForm.php" method="post">
        <label for="txtNombreDelCliente">Nombre del Cliente: </label>
        <input type="text" name="txtNombreDelCliente" value="<?php echo $strNombreCliente ?>">

        <label for="txtMonto">Monto: </label>
        <input type="text" name="txtMonto" value="<?php echo $monto ?>">

        <label for="txtTasaInteresAnual">Tasa de Interés (Anual): </label>
        <input type="text" name="txtTasaInteresAnual" value="<?php echo $tasaInteresAnual ?>">

        <label for="txtPlazo">Plazo (Anual): </label>
        <input type="number" name="txtPlazo" min="1" step="1" value="<?php echo $intplazoAnios ?>">
        <button type="submit" name="btnCalcular">Calcular</button>
        <button type="submit" name="btnGuardar">Guardar</button>


    </form>
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
                    <td><?php echo number_format($fila["capitalAmortizado"], 2) ?></td>
                    <td><?php echo number_format($fila["interes"], 2) ?></td>
                    <td><?php echo number_format($fila["cuota"], 2) ?></td>
                    <td><?php echo number_format($fila["capitalPendiente"], 2) ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>