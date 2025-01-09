<?php

/* 
 Creacion de cookies
 */

//Crear cookie nombre con valor Javier
setcookie('nombre', 'Javier', time() + 3600);

//Crear cookie edad con valor 22
setcookie('edad', 22, time() + 3600);

//Crear cookie ciudad con valor Villamartin
setcookie('ciudad', 'Villamartin', time() + 3600);

echo 'Cookies creadas';

require 'index.php';