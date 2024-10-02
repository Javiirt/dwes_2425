<?php

/**
 * Modelo modelSumar.php
 * Descripción: suma los valores del formulario
 */

//print_r($_GET);

$operacion = "Resta";

//Cargo en variables
$valor_1 = $_GET["valor1"];
$valor_2 = $_GET["valor2"];

if($valor_1 == ""){
    $valor_1 = 0;
}

if($valor_2 == ""){
    $valor_2 = 0;
}

//Realizo los calculos
$resultado = $valor_1 - $valor_2;
