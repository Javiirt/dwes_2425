<?php

/**
 * Modelo model.calcular.php
 * Descripción: suma los valores del formulario
 */

 define('GRAVEDAD', 9.81); 


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
$alcance = ($velocidadInicial*$velocidadInicial*sin(2*$angulosRadianes))/(GRAVEDAD);
$tiempoVuelo = (2*$velocidadY)/GRAVEDAD;
$alturaMaxima = ($velocidadInicial*$velocidadInicial*pow(sin($angulosRadianes),2))/(2*GRAVEDAD);


$angulosRadianes =number_format($angulosRadianes,5,",","");  
$velocidadX = number_format($velocidadX, 2,",","");
$velocidadY = number_format($velocidadY, 2,",","");
$alcance = number_format($alcance, 2,",","");
$tiempoVuelo = number_format($tiempoVuelo, 2,",","");
$alturaMaxima = number_format($alturaMaxima, 2,",","");






