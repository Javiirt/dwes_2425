<?php

/**
 * Conversiones de tipo
 */

$var = 3; //Tipo integer
var_dump(value: $var);
echo("<br>");

#Conversión mediante funciones

//strval
$var1 = strval($var);
var_dump(value: $var1);
echo("<br>");

//floatval
$var2 = floatval($var);
var_dump(value: $var2);
echo("<br>");

//intval
$var3 = intval($var);
var_dump(value: $var3);
echo("<br>");


#Conversión (tipo dato) variable
$var4 = 7.89;
$var4 = (int)  $var4;
var_dump(value: $var4);
echo("<br>");

$var5 = 89;
$var5 = (float) $var5;
var_dump(value: $var5);
echo("<br>");

$var6 = 89;
$var6 = (string) $var6;
var_dump(value: $var6);
echo("<br>");

$var7 = 100;
$var7 = (array) $var7;
var_dump(value: $var7);
echo("<br>");

#Conversión mediante settype
$var8 = 45;
settype(var: $var8, type: "string");
var_dump(value: $var8);
echo("<br>");