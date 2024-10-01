<?php 

    /**
     * Actividad 2.2
     */

    /**
    *Ejercicio 1. Conversiones de datos en expresiones.

    *Crear un script PHP donde se muestre el tipo de dato y resultado de las siguientes expresiones matemáticas:

    *Multiplica valor entero con una cadena que contiene un número inicial
    *Sumar valor entero con cadena con número inicial
    *Sumar valor entero con valor float
    *Concatenar valor entero con cadena
    *Sumar valor entero con valor booleano
    */

    echo("<h3>Ejercicio 1. Conversiones de datos en expresiones.</h3>");

    
    $v1 = 3;
    $v2 = "10 poemas de amor y una cancion desesperada";
    $v3 = 3.14159;
    $v4 = true;


    //Multiplica valor entero con una cadena que contiene un número inicial
    var_dump($v1 * $v2);
    echo("<br>");

    //Sumar valor entero con cadena con número inicial
    var_dump($v1 + $v2);
    echo("<br>");


    //Sumar valor entero con valor float
    var_dump($v1 + $v3);
    echo("<br>");

    //Concatenar valor entero con cadena
    var_dump($v1 . $v2);
    echo("<br>");

    //Sumar valor entero con valor booleano
    var_dump($v1 + $v4);
    echo("<br>");


