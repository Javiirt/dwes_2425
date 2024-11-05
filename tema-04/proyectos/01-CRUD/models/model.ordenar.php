<?php

/**
 * Modelo: model.ordenar.php 
 * Descripción: ordena la tabla segun un criterio
 * 
 * Datos recibidos por el método GET:
 * - criterio
 */

#Recogemos los valores recibidos por el método GET
$criterio = $_GET['criterio'];

#Definimos la lista de articulos ordenada
$tabla_articulos = $tabla->ordenar($criterio);
