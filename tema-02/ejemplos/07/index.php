<?php 

$cadena1 = "Hola \"Mundo\"";  //Para poner " dentro de una cadena con ", se usa \"
$cadena2 = "Hola 'Mundo'";    //Para poner ' dentro de una cadena con ", no hace falta poner \'
$cadena3 = 'Hola \'Mundo\'';  //Para poner ' dentro de una cadena con ', se usa \'
$cadena4 = 'Hola "Mundo"';    //Para poner " dentro de una cadena con ', no hace falta poner \"


echo $cadena1;
echo "<br>";
echo $cadena2;
echo "<br>";
echo $cadena3;
echo "<br>";
echo $cadena4;
echo "<br>";