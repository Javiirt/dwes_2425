<?php

/**
 * Modelo model.calcular.php
 * Descripción: suma los valores del formulario
 */

//print_r($_GET);


//Cargo en variables
$velocidadInicial = $_POST["velocidad"];
$anguloInclinacion = $_POST["angulo"];

if($velocidadInicial == ""){
    $velocidadInicial = 0;
}

if($anguloInclinacion == ""){
    $anguloInclinacion = 0;
}

$angulosRadianes = $anguloInclinacion*M_PI/180;
$velocidadX = $velocidadInicial*cos($angulosRadianes);
$velocidadY = $velocidadInicial*sin($angulosRadianes);
$alcance = ($velocidadInicial*$velocidadInicial*sin(2*$angulosRadianes))/(9.8);
$tiempoVuelo = (2*$velocidadY)/9.8;
$alturaMaxima = ($velocidadInicial*$velocidadInicial*(sin($angulosRadianes)*sin($angulosRadianes)))/(2*9.8);

$angulosRadianes = round($angulosRadianes, 5);
$velocidadX = round($velocidadX, 2);
$velocidadY = round($velocidadY, 2);
$alcance = round($alcance, 2);
$tiempoVuelo = round($tiempoVuelo, 2);
$alturaMaxima = round($alturaMaxima, 2);




