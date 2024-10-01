<?php 

    /**
     * Actividad 2.2
     */

    
 /**
 * Ejercicio 4. empty().

 * Crear un script PHP donde se muestre el resultado de 3 valores verdaderos y tres valores falsos para la función empty()
 */

 echo("<h3>Ejercicio 4. empty().</h3>");

 $varEmptyTrue1 = null;
 $varEmptyTrue2 = 0;
 $varEmptyTrue3 = false;
 $varEmptyFalse1 = true;
 $varEmptyFalse2 = "foo";
 $varEmptyFalse3 = 1;

 var_dump(empty($varEmptyTrue1));
 echo("<br>");
 var_dump(empty($varEmptyTrue2));
 echo("<br>");
 var_dump(empty($varEmptyTrue3));
 echo("<br>");
 var_dump(empty($varEmptyFalse1));
 echo("<br>");
 var_dump(empty($varEmptyFalse2));
 echo("<br>");
 var_dump(empty($varEmptyFalse3));
 echo("<br>");

