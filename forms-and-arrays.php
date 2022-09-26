<?php 
    session_start();
    
    $intClicks = 0;
    $txtNombre = "";
    $arrNombres = array();
    if(isset($_SESSION["intClicks"])){
        $intClicks = $_SESSION["intClicks"];
    }

    if(isset($_SESSION["arrNombres"])){
        $arrNombres = $_SESSION["arrNombres"];
    }

    if(isset($_POST['btnProcesar'])){
        $intClicks ++;
        $txtNombre = $_POST["txtNombre"];
        $arrNombres[] = $txtNombre;
    }

    $_SESSION["intClicks"] = $intClicks;
    $_SESSION["arrNombres"] = $arrNombres;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms and Arrays</title>
</head>
<body>
    <h1>Uso de Formularios y Arreglos en PHP</h1>
    <form action="forms-and-arrays.php" method="post">
        <label for="txtNombre">Nombre Completo</label>
        <input type="text" name="txtNombre" id="txtNombre" value="<?php echo $txtNombre ?>">
        <button type="submit" name="btnProcesar" value="Hola">Procesar</button>
    </form>
    <h1>Clicks dados a procesar: <?php echo $intClicks ?></h1> 
    <h2>Nombres guardados</h2>
    <?php
        foreach ($arrNombres as $nombre) {
            echo "-".   $nombre . '</br>';
        }
        print_r($arrNombres);
    ?>
</body>
</html>