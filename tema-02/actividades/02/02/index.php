<?php 

    /**
     * Actividad 2.2
     */

    
/**
 * Ejercicio 2. is_null().

 * Crear un script PHP donde se muestre el resultado de 3 valores verdaderos y tres valores falsos para la función is_null()
 */

 echo("<h3>Ejercicio 2. is_null().</h3>");

 $varNullTrue1 = null;
 $varNullTrue2 ;
 $varNullFalse1 = true;
 $varNullFalse2 = "";
 $varNullFalse3 = 1;

 var_dump(is_null($varNullTrue1));
 echo("<br>");
 var_dump(is_null($varNullTrue2));
 echo("<br>");
 var_dump(is_null($varNullTrue3));
 echo("<br>");
 var_dump(is_null($varNullFalse1));
 echo("<br>");
 var_dump(is_null($varNullFalse2));
 echo("<br>");
 var_dump(is_null($varNullFalse3));
 echo("<br>");

