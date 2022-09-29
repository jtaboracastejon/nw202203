<?php 
require_once "Demo/Vista.php";
require_once "Demo/Rectangle.php";
require_once "Demo/Square.php";
require_once "Demo/Circle.php";

$fulanito = new Vista("Fulanito de Tal C Desde El Constructor", "Honduras","10","20201209");
$menganito = new Vista();

/* $fulanito->strNombre = "Fulanito de tal";
$fulanito->intNumero = 1;
$fulanito->strPais = "Honduras";
$fulanito->strFechaNacimiento = "2002-02-19"; */

$menganito->strNombre = "Menganito de tal";
$menganito->intNumero = 2;
$menganito->strPais = "Honduras";
$menganito->strFechaNacimiento = "2000-12-24";

echo $fulanito->printDatos();
echo "</br>";
echo $menganito->printDatos();
echo "<hr>";
$rect = new Rectangle(5,10);
$square = new Square(10);
$circle = new Circle(5);

$arrForms = array($rect, $square, $circle);

foreach($arrForms as $form){
    echo $form->getArea();
    echo "</br>";
    echo $form->getPerimetro();
    echo "<hr>";
}
//DONE TODO: Tarea Clase del circulo area(pi*r^2) y perimetro(2*pi*r)
?>

