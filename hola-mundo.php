<?php 
    //Comentarios en php es como en c
    /* 
        Cometario de bloque
    */
    $cuandoLosGatosNoEstanLosRatonesGranPachanganDan = true;


    //Camello hungaro

    $bolEsViejo = true;
    $intEsViejo = 18;
    $strEsViejo = "El conocimiento";

    if (true){
        error_log("Entro a condicion!");
    }else{
        error_log("No entro a condicion True!");
    }

    switch ($intEsViejo) {
        case '18':
            error_log("Entro a case 18");
            break;
        
        default:
            error_log("Entro a bloque por defecto!");
            break;
    }

    $esValido = false;
    $strResultado = "";
    if ($esValido) {
        $strResultado = "Valido";
    }else {
        $strResultado = "No Valido";
    }
    
    $strResultado = ($esValido) ? "Valido" : "No Valido";

    // Operador Aritmeticos y de Comparación (Lógicos)
    $strResultado = ($strEsViejo === "El conocimiento") ? "V" : "F"; 
    
    $strResultado = ($esValido == 1)?"V":"F"; //"V"

    $strResultado = ($esValido === 1)?"V":"F"; //"F"

    $strResultado = ($esValido != 1)?"V":"F"; //"F"
    
    $strResultado = ($esValido !== 1)?"V":"F"; //"F"

    /* > < >= <= && ||  */ 

    /*  */
    $strResultado = "Hola" . "Adios" . (1234.12);
    /* 
        + - * / **   += -= *=    ++ -- 
    */
    $intCuadrado = 2**2;

    //=============================================================
    $arrNumeros = array(1,2,3,4,5,6,7,8,9,0);

    $arrNumeros[0];

    $arrNumeros= array();

    $arrNumeros[] = "Hola"; //Llave = 0

    $arrNumeros["nombre"] = "Orlando"; // llave = nombre

    echo $arrNumeros["nombre"];

    $arrNumeros[] = "Adios"; //llave = 1
    $arrNumeros[] = "Good bye"; //llave = 2

    //==============================================================

    for ($i = 0; $i < 100 ; $i++) { 
        //echo $arrNumeros[$i];

    }

    $i=0;
    while ($i < 100){
        //Expresiones

        $i++;
    }

    do{
        $i ++;
    }while($i < 100);

    foreach($arrNumeros as $valArray){
        echo $valArray;
    }

    foreach($arrNumeros as $key => $valArray){
        //Super for con llaves;
    }

    $arrPersona = array(
        "id"=>10,
        "nombre"=>"Orlando",
        "curso"=>"Negocios Web",
    );

    $arrTable = array($arrPersona);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento HTML en PHP</title>
</head>
<body>
    <h1>
        <?php
            echo $strEsViejo;
        ?>
    </h1>
</body>
</html>