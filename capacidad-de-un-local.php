<?php
session_start();

$intPersonas = 0;
$intCapacidadMaxima = 0;

$strErrorMsg="";

if (isset($_SESSION['intPersonas'])) {
    $intPersonas = $_SESSION['intPersonas'];
}

if (isset($_SESSION['intCapacidadMaxima'])) {
    $intCapacidadMaxima = $_SESSION['intCapacidadMaxima'];
}


if (isset($_POST['txtCapacidadMaxima'])) {
    $intCapacidadMaxima = $_POST['txtCapacidadMaxima'];
}

if (isset($_POST['btnAgregar'])) {
    if($intPersonas < $intCapacidadMaxima){
        $intPersonas++;
    }else{
        $strErrorMsg = "No puede superar la capacidad del local";
    }
}

if (isset($_POST['btnRestar'])) {
    if ($intPersonas > 0) {
        $intPersonas--;
    }else{
        $strErrorMsg = "La capacidad no puede ser menor de 0";
    }
}

if (isset($_POST['btnRestablecer'])) {
    $intCapacidadMaxima = 0;
    $intPersonas = 0;
    $strErrorMsg = "";
}



$_SESSION['intPersonas'] = $intPersonas;
$_SESSION['intCapacidadMaxima'] = $intCapacidadMaxima;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capacidad de un local</title>
</head>

<body>
    <p>Tarea por: Javier Raúl Tabora</p>
    <h3>Registro de actividad del Local</h3>
    <form action="capacidad-de-un-local.php" method="POST">
        <label for="txtCapacidadMaxima">Ingrese la capacidad maxima: </label>
        <input type="number" min="1" name="txtCapacidadMaxima" id="txtCapacidadMaxima" value="<?php echo $intCapacidadMaxima ?>">
        <h4><?php echo $intPersonas; ?></h4>
        <div>
            <button type="submit" name="btnAgregar" title="Agregar persona al local"> + </button>
            <button type="submit" name="btnRestar" title="Restar persona al local"> - </button>
            <button type="submit" name="btnRestablecer" title="Restablecer"> Restablecer </button>
        </div>
    </form>
    <span><?php echo $strErrorMsg ?></span>
</body>

</html>