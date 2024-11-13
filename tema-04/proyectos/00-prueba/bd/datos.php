<?php

/**
 * datos.php 
 * 
 * Contendrá en objetos de la clase usuario los valores de al menos 4 articulos. 
 * Este archivo se almacenará en la carpeta bd de nuestro proyecto 
 *
 */
include  'class/Class_tabla_articulos.php';

 #Definimos el objeto de la tabla 
$tabla = new Class_tabla_articulos([

    // 1. Vehículo deportivo
    $deportivo = new Class_articulo(
        1,
        "Vehículo deportivo de alto rendimiento",
        "911 GT3",
        "Porsche",
        ["Deportivo", "Gasolina"],
        5,
        200000
    ),

    // 2. Vehículo antiguo
    $clasico = new Class_articulo(
        2,
        "Coche clásico de colección",
        "Mustang 1969",
        "Ford",
        ["Clásico", "Gasolina"],
        2,
        120000
    ),

    // 3. Vehículo eléctrico
    $electrico = new Class_articulo(
        3,
        "Vehículo eléctrico de lujo",
        "Model S",
        "Tesla",
        ["Eléctrico"],
        10,
        80000
    ),

    // 4. Vehículo todoterreno
    $todoterreno = new Class_articulo(
        4,
        "SUV todoterreno con gran capacidad",
        "Defender",
        "Land Rover",
        ["Todoterreno", "Diésel"],
        7,
        90000
    )

]);