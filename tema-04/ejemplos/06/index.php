<?php

/**
 * Concepto de herencias
 */


include "class/class.producto.php";

$producto = new Producto(
    1,
    'La tormenta',
    20.50,
    'Javier',
    'Rodriguez'

);


$libro = new Libro(
    1,
    'La tormenta',
    20.50,
    'Javier',
    'Rodriguez',
    300,
    'Sanaya'


);


var_dump($producto);
echo('<br>');
var_dump($libro);
echo('<br>');
echo ($libro->getResumen());