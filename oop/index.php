<?php 
require_once "Demo/Vista.php";

$fulanito = new Vista();
$menganito = new Vista();

$fulanito->strNombre = "Fulanito de tal";
$fulanito->intNumero = 1;
$fulanito->strPais = "Honduras";
$fulanito->strFechaNacimiento = "2002-02-19";

$menganito->strNombre = "Menganito de tal";
$menganito->intNumero = 2;
$menganito->strPais = "Honduras";
$menganito->strFechaNacimiento = "2000-12-24";

echo $fulanito->printDatos();
echo "</br>";
echo $menganito->printDatos();

?>