<?php

/**
 * Ejemplo 
 * Descripcion: crear objetos a partir de la clase Class_vehiculo
 */

#Incluyo archivo de la clase vehiculo
include("class/class.vehiculo.php");

#Creo un objeto de la clase vehiculo
$vehiculo = new Class_vehiculo("1234abc", 9);


#Mostrar detalles del vehiculo
echo "Matrícula: " . $vehiculo->getMatricula();
echo "<br>";
echo "Velocidad: " . $vehiculo->getVelocidad();
echo "<br>";
var_dump($vehiculo);
echo "<br>";
