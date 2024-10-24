<?php

/**
 * Modelo: model.index.php 
 * Hace las operaciones
 * 
 * Metodo GET:
 *  -valor1
 *  -valor2
 *  -operador
 */

#Cargar datos del formulario
$valor1 = $_GET['valor1'];
$valor2 = $_GET['valor2'];
$operacion = $_GET['operacion'];


#creo objeto calculadora
$calculadora = new Class_calculadora(
    $valor1,
    $valor2,
    $operacion,
    null
);

switch ($operacion) {
    case 'sumar':
        $calculadora->suma();
        break;

    case 'restar':
        $calculadora->resta();
        break;

    case 'dividir':
        $calculadora->division();
        break;

    case 'producto':
        $calculadora->multiplicacion();
        break;

    case 'potencia':
        $calculadora->potencia();
        break;

    default:
        echo ("Operación no válida");
        break;
}


