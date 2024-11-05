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

$libro->muestraTitulo() ;