<?php 
// Tipos de variables

#boolean
$test = true; //true(1) - false(0)
echo "\$test: ";
var_dump(value: $test);
echo "<br><br> ";


#Integer
$inte = 7; 
echo "\$inte: ";
var_dump(value: $inte);
echo "<br><br> ";


#Float
$floa = 5.12; //Separador es el . 
echo "\$floa: ";
var_dump(value: $floa);
echo "<br><br> ";


#Float exponencial
$floaExp = 1.70e4; //Separador es el . 
echo "\$floaExp: ";
var_dump(value: $floaExp);
echo "<br><br> ";


#String ''
$striSimple = 'Hola mundo ' . $inte; // Al poner ' en vez de " evita el buscar una variable en su interior
echo "\$stri: ";
var_dump(value: $stri);
echo "<br><br> ";


#String ""
$striDoble = "Hola mundo $inte"; // Al poner " en vez de ' obligamos buscar una variable en su interior
echo "\$striDoble: ";
var_dump(value: $striDoble);
echo "<br><br> ";