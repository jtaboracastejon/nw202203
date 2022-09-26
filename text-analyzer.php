<?php
    require_once "./libraries/analyzer_lib.php";
    $txtText="";

    if(isset($_POST["btnProcesar"])){
        // Analizar el Código
        $txtText = $_POST["txtText"];
        analizarTexto($txtText);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analizador de Texto</title>
</head>
<body>
    <form action="text-analyzer.php" method="post">
        <label for="txtText">Texto a analizar</label>
        <textarea name="txtText" id="txtText" cols="30" rows="10"></textarea>
        <br>
        <button type="submit" name="btnProcesar">Analizar</button>
    </form>
</body>
</html>