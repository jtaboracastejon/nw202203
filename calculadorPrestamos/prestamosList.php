<?php 
session_start();
$arrPrestamos = array();
if (isset($_SESSION["prestamos"])) {
    $arrPrestamos = $_SESSION["prestamos"];
}

if(isset($_POST['btnLimpiarLista'])){
    unset($_SESSION["prestamos"]);
    header("refresh:0");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Prestamos</title>
</head>
<body>
    <h2>Listado de Prestamos</h2>
    <a href="prestamoForm.php">Calcular Prestamo</a>
    <form action="prestamosList.php" method="post">
        <button type="submit" name="btnLimpiarLista">Limpiar Lista</button>
    </form>
    <table cellpadding="10" border="1">
        <thead>
            <th>Nombre del Cliente</th>
            <th>Tasa de Interes</th>
            <th>Cuota</th>
            <th>Periodo Años</th>
            <th>Periodo Meses</th>
            <th>Capital Prestado</th>
            <th>Generar Tabla</th>
        </thead>
        <tbody>
            <?php
            foreach ($arrPrestamos as $key => $prestamo) {
            ?>
                <tr>
                    <td><?php echo $prestamo["nombreCliente"] ?></td>
                    <td><?php echo number_format($prestamo["tasaInterés"], 2) ?></td>
                    <td><?php echo number_format($prestamo["cuota"], 2) ?></td>
                    <td><?php echo number_format($prestamo["periodoAnios"], 2) ?></td>
                    <td><?php echo number_format($prestamo["periodoMeses"], 2) ?></td>
                    <td><?php echo number_format($prestamo["capitalPrestado"], 2) ?></td>
                    <td><a href="mostrarTabla.php?key=<?php echo $key ?>">Mostrar Tabla</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>