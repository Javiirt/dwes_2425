<?php

    /*
        Modelo: model.index.php
        Descripción: muestra los alumnos

    */

    # Creo un objeto de la clase tabla alumnos
    $tabla_alumnos = new Class_tabla_alumnos();

    # Cargo tabla de alumnos
    $alumnos = $tabla_alumnos->getAlumnos();

    
