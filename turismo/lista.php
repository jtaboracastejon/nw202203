<?php
    session_start();
    $arrReservas=array();

    if(isset($_SESSION["arrReservas"])){
        $arrReservas = $_SESSION["arrReservas"];
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table cellpadding="10" border="1">
        <thead>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Noches</th>
            <th>Cabaña</th>
            <th>Precio</th>
            <th>Total</th>
        </thead>
        <tbody>
            <?php foreach($arrReservas as $reserva){?>
                <tr>
                    <td><?php echo $reserva["nombre"] ?></td>
                    <td><?php echo $reserva["correo"] ?></td>
                    <td><?php echo $reserva["noches"] ?></td>
                    <td><?php echo $reserva["cabania"]["descripcion"] ?></td>
                    <td><?php echo $reserva["cabania"]["precio"] ?></td>
                    <td><?php echo $reserva["total"] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>