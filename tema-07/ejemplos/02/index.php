<?php 

/*
    Ejemplo crear sesión personalizada
*/

session_id('123JavierRodriguez');
session_name('SESION-Javier');
session_start();


echo 'SID: '.session_id();
echo '<br>';
echo 'NAME: '.session_name();

