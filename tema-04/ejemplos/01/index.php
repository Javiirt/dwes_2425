<?php

/**
 * Ejemplo 
 * Descripcion: crear objetos a partir de la clase Class_vehiculo
 */

#Incluyo archivo de la clase vehiculo
include("class/class.vehiculo.php");

#Creo un objeto de la clase vehiculo
$vehiculo = new Class_vehiculo();

#Establecer la matricula del vehiculo
$vehiculo->setMatricula("6067CNF");

#Establecer la velocidad del vehiculo
$vehiculo->setVelocidad(9);

#Incrementar velocidad del vehiculo
$vehiculo->aumentarVelocidad();

#Mostrar detalles del vehiculo
echo "Matrícula: " . $vehiculo->getMatricula();
echo "<br>";
echo "Velocidad: " . $vehiculo->getVelocidad();




