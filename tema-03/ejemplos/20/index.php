<?php

/**
 * Funcion con valor por defecto
 */


function sumar($valor1, $valor2 = 10)
{
    $resultado = $valor1 + $valor2;
    return $resultado;
}

$v1 = 5;

#Uso la funcion sumar
$resultado = sumar($v1);

echo ($resultado);