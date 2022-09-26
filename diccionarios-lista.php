<?php
    session_start();
    $arrAgenda = array();
    if(isset($_SESSION['arrAgenda'])){
        $arrAgenda = $_SESSION['arrAgenda'];
    }
    if(isset($_POST['btnAlmacenar']))
    {
        $arrContacto = [
            'nombre' => $_POST['txtNombre'],
            'correo' => $_POST['txtCorreo'],
            'telefono' => $_POST['txtTelefono']
        ];

        $arrAgenda[] = $arrContacto;
    }
    
    $_SESSION['arrAgenda'] = $arrAgenda;
    
    if(isset($_POST["btnBorrarAgenda"])){
        unset($_SESSION["arrAgenda"]);
        header("Refresh:0");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form action="diccionarios-lista.php" method="post">
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" id="">
        <label for="txtCorreo">Correo:</label>
        <input type="text" name="txtCorreo" id="">
        <label for="txtTelefono">Telefono:</label>
        <input type="text" name="txtTelefono" id="">
        <button type="submit" name="btnAlmacenar">Almacenar</button>
        <br>
        <button type="submit" name="btnBorrarAgenda">Borrar Agenda</button>
    </form>
    <?php
        foreach($arrAgenda as $contacto){
            echo "<hr>";
            echo "Nombre:".$contacto['nombre']."<br>" ;
            echo "Telefono:".$contacto['telefono']."<br>";
            echo "Correo:".$contacto['correo']."<br>";
        }
    ?>
</body>
</html>