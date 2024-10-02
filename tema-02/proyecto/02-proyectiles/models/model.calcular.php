<?php

/**
 * Modelo model.calcular.php
 * Descripción: suma los valores del formulario
 */

//print_r($_GET);

$operacion = "División";

//Cargo en variables
$velocidadInicial = $_POST["velocidad"];
$anguloInclinacion = $_POST["angulo"];
$angulosRadianes = 0;
$velocidadX = 0;
$velocidadY = 0;
$alcance = 0;
$tiempoVuelo = 0;
$alturaMáxima = 0;



if($velocidadInicial == ""){
    $velocidadInicial = 0;
}

if($anguloInclinacion == ""){
    $anguloInclinacion = 0;
}

