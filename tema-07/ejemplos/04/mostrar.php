<?php

/*
    Mostrar cookies
*/

//Mostrar cookies
if (isset($_COOKIE['nombre'])){
    echo 'Nombre: ' . $_COOKIE['nombre'] . '<br>';
}else{
    echo 'No existen cookies';
    
}

if (isset($_COOKIE['edad'])){
    echo 'Edad: ' . $_COOKIE['edad'] . '<br>';  
}else{
    echo 'No existen cookies';
    
}

if (isset($_COOKIE['ciudad'])){
    echo 'Ciudad: ' . $_COOKIE['ciudad'] . '<br>';
}else{
    echo 'No existen cookies';
    
}

echo '<pre>';
print_r($_COOKIE);


require 'index.php';