<?php

    /*
        Modelo: model.nuevo.php
        Descripción: genera los datos necesarios para añadir nuevo alumno
    */


    # Creo un objeto de la clase tabla alumnos
    $alumnos = new Class_tabla_alumnos();
    
    # Cargo tabla de cursos
    $cursos = $alumnos->getCursos();

    

