<?php 

/**
 * Obtenemos las variables del formulario
 * En caso de no introducir un número, lo casteamos a float para que no haya problemas
 * */
$radio = (float) $_POST["radio"];
$frecuencia = (float) $_POST["frecuencia"];
$masa = (float) $_POST["masa"];


//Constante PI : M_PI

//Calculamos
$velocidadTangencial = 2*M_PI*$radio*$frecuencia;
$aceleracionCentripeta = pow($velocidadTangencial,2)/$radio;
$fuerzaCentripeta = $masa*$aceleracionCentripeta;
$periodo = 1/$frecuencia;


//Formateamos valores para que solo haya 2 decimales
$radio = number_format($radio,2,",","");
$frecuencia = number_format($frecuencia,2,",","");
$masa = number_format($masa,2,",","");
$velocidadTangencial = number_format($velocidadTangencial,2,",","");
$aceleracionCentripeta = number_format($aceleracionCentripeta,2,",","");
$fuerzaCentripeta = number_format($fuerzaCentripeta,2,",","");
$periodo = number_format($periodo,10,",","");