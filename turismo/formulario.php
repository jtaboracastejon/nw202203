<?php
    require_once "libreria.php";
    $txtNombre = "";
    $txtCorreo = "";
    $intCantidadDeNoches = 1;
    $cmbCabania = "C1";

    if(isset($_POST["btnConfirmar"])){
        $txtNombre = $_POST["txtNombre"];
        $txtCorreo = $_POST["txtCorreo"];
        $intCantidadDeNoches = $_POST["txtCantidadDeNoches"];
        $cmbCabania = $_POST["cmbCabania"];
        // TODO: Agregar a la lista de sesión por medio de una función de librería
        agregarALista(
        $txtNombre, 
        $txtCorreo,
        $intCantidadDeNoches,
        $cmbCabania,
        );
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de reserva</title>
</head>
<body>
    <h1>Registro de Reservas La Ensenada</h1>
    <form action="formulario.php" method="post">
        <div>
            <label for="txtNombre">Nombre</label>
            <input type="text" name="txtNombre" id="txtNombre">
        </div>
        <div>
            <label for="txtCorreo">Correo</label>
            <input type="text" name="txtCorreo" id="txtCorreo">
        </div>
        <div>
            <label for="txtCantidadDeNoches">Cantidad De Noches</label>
            <input type="text" name="txtCantidadDeNoches" id="txtCantidadDeNoches">
        </div>
        <div>
            <label for="txtCabaña">Cabaña</label>
            <select name="cmbCabania" id="cmbCabania">
                <option value="C1" <?php echo ($cmbCabania === "C1")? "selectex" : "" ?> >Cabaña 1 (L.300.00)</option>
                <option value="C2" <?php echo ($cmbCabania === "C2")? "selectex" : "" ?> >Cabaña 2 (L.400.00)</option>
                <option value="C3" <?php echo ($cmbCabania === "C3")? "selectex" : "" ?> >Cabaña 3 (L.500.00)</option>
                <option value="C4" <?php echo ($cmbCabania === "C4")? "selectex" : "" ?> >Cabaña 4 (L.600.00)</option>
                <option value="C5" <?php echo ($cmbCabania === "C5")? "selectex" : "" ?> >Cabaña 5 (L.700.00)</option>
            </select>
        </div>
        <div>
            <button type="submit" name="btnConfirmar">Confirmar Reserva</button>
        </div>
    </form>
</body>
</html>