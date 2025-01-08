<?php

session_start();

# Comprobamos si la variable ya existe
if (isset($_SESSION['visitas']))
$_SESSION['visitas']++;
else
$_SESSION['visitas'] = 1;


echo 'SID: '.session_id();
echo '<br>';
echo 'NAME: '.session_name();


$_SESSION['nombre'] = "Javier";
$_SESSION['apellidos'] = "Rodriguez";
$_SESSION['email'] = "javier@gmail.com";

include 'index.php';