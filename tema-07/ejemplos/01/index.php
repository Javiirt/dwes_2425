<?php 

/*
    Ejemplo cookie
*/

session_start();

echo 'SID: '.session_id();
echo '<br>';
echo 'NAME: '.session_name();