<?php 


#Incluyo archivo de la clase calculadora
include("class/class.calculadora.php");

#Creo un objeto de la clase calculadora
$calculadora = new Class_calculadora(10,5 ,'/');


#Mostrar calculos
echo "Resultado: " . $calculadora->getResultado();
echo "<br>";

$calculadora->setValor1(1);
$calculadora->setValor2(2);
$calculadora->setOperador('+');


echo "Resultado: " . $calculadora->getResultado();
echo "<br>";