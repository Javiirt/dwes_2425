<?php
/**
 * Función is_null()
 */

    //Variable no definida
    var_dump( is_null($var));
    echo("<br>");

    //Variable definida como null
    $var = null;
    var_dump( is_null($var));
    echo("<br>");

    //Variable eliminada
    $var1 = null;
    unset($var1);
    var_dump(is_null($var1));
    echo("<br>");