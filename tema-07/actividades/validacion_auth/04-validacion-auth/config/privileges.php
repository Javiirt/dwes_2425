<?php 

/* 
    Descripción:
        Archivo que contiene los privilegios de la aplicación

    Perfiles:
        - 1: Administrador
        - 2: Editor
        - 3: Registrado
    
    Controladores:
        - 1: alumno

    Privilegios:
        - 1: main
        - 2: nuevo
        - 3: editar
        - 4: eliminar
        - 5: mostrar
        - 6: ordenar
        - 7: filtrar

    Los perfiles se asignarán mediante un array asociativo, 
    donde la clave se corresponderá con el controlador 
    y la clave secundaria con el método.

    $GLOBALS['alumno']['main'] = [1, 2, 3];


*/

$GLOBALS['alumno']['main'] = [1, 2, 3];
$GLOBALS['alumno']['nuevo'] = [1, 2];
$GLOBALS['alumno']['editar'] = [1, 2];
$GLOBALS['alumno']['eliminar'] = [1];
$GLOBALS['alumno']['mostrar'] = [1, 2, 3];
$GLOBALS['alumno']['ordenar'] = [1, 2, 3];
$GLOBALS['alumno']['filtrar'] = [1, 2, 3];


