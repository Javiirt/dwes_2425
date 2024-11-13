<?php

/**
 * Modelo: model.ordenar.php 
 * Descripción: filtramos la tabla segun una expresion
 * 
 * Datos recibidos por el método GET:
 * - expresion
 */


#obtenemos criterio de ordenacion
$expresion = $_GET['expresion'];


#cargamos la tabla
$tabla_articulos = $tabla->filtrar($expresion);
