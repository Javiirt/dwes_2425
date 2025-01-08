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

include 'index.php';