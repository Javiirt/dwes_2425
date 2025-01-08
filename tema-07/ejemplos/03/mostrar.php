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
echo '<br>';
echo 'Nombre: '.$_SESSION['nombre'];
echo '<br>';
echo 'Apellidos: '.$_SESSION['apellidos'];
echo '<br>';
echo 'Correo: '.$_SESSION['email'];
echo '<br>';
echo 'Visitas: '.$_SESSION['visitas'];
echo '<br>';

include 'index.php';