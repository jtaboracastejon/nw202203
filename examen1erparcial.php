<!-- Lea el siguiente código, complete las instrucciones 
faltantes para poder obtener la palabra con mayór frecuencia -->
<?php
/* $txtAnalizar = "Real Long Long Text";
    $arrTexto = explode(" ", $txtAnalizar);
    $dicFreq = array();
    foreach ($arrTexto as $palabra){
        if( isset($dicFreq[$palabra]) ) {
            $dicFreq[$palabra] ++;
        } else {
            $dicFreq[$palabra] = 1;
        }
    }
    // Ordenar en forma descendente sin perder las llaves
    arsort($dicFreq);
    
    foreach ($dicFreq as $palabra=>$frecuencia ) {
        echo $palabra . " - " . $frecuencia;
    } */



?>
<?php echo "<h1>HOLA MUNDO XYZ</h1>";?>
/* Tiene el siguiente código, complete el script 
completo para mostrar en una tabla html el ID y la FECHA . */
<?php
$fechas = array(
    array("id" => "Lns", "descipcion" => "Lunes"),
    array("id" => "Mrt", "descipcion" => "Martes"),
    array("id" => "Mrc", "descipcion" => "Miercoles"),
    array("id" => "Jvs", "descipcion" => "Jueves"),
    array("id" => "Vrn", "descipcion" => "Viernes"),
    array("id" => "Sbd", "descipcion" => "Sábado"),
    array("id" => "Dmg", "descipcion" => "Domingo")
);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio</title>
</head>

<body>
    <h1>Tabla de Fechas</h1>
    <p>Desarrolla de aquí en adelante el ejecício</p>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>FECHA</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($fechas as $fecha){ ?>
                <tr>
                    <td><?php echo $fecha["id"]; ?></td>
                    <td><?php echo $fecha["descipcion"]; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    
</body>

</html>