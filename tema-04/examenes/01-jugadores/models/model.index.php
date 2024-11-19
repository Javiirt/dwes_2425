<?php

    /*
        Modelo: model.index.php
        Descripción: genera array objetos de la clase jugadores
    */

    #Creamos un objeto de tipo Class_tabla_jugadores
    $obj_tabla_jugadores = new Class_tabla_jugadores();

    #Definimos la lista de equipos
    $lista_equipos = $obj_tabla_jugadores->getEquipos();

    #Definimos la lista de posiciones
    $lista_posiciones = $obj_tabla_jugadores->getPosiciones();

    #Cargamos en el objeto los jugadores
    $obj_tabla_jugadores->getDatos();

    #Definimos la lista de jugadores
    $lista_jugadores = $obj_tabla_jugadores->tabla;


