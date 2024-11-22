<?php

    /*
        Modelo: model.nuevo.php
        Descripción: genera los datos necesarios para añadir nuevo artículo
    */

    # Símbolo monetario local
    setlocale(LC_MONETARY,"es_ES");

    # Creo un objeto de la clase tabla alumnos
    $obj_tabla_alumnos = new Class_tabla_alumnos(
        'localhost',
        'root',
        '',
        'fp');

    # Cargo la tabla de cursos
    $lista_cursos =  $obj_tabla_alumnos->getCursos();


    

