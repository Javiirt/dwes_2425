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

$producto->setTitulo('La tormenta perfecta') ;
var_dump($producto);