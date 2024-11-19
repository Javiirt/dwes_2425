<?php

/*
    modelo: model.mostrar.php
    descripción: carga los datos del jugador que deseo mostrar

    Método GET:
        - indice de la tabla en la que se encuentra el jugador
*/

#Almacenamos la variable indice recibida por el método GET
$id = $_GET["indice"];

#Creamos un objeto de tipo Class_tabla_jugadores
$obj_tabla_jugadores = new Class_tabla_jugadores();

#Definimos la lista de equipos
$lista_equipos = $obj_tabla_jugadores->getEquipos();

#Definimos la lista de posiciones
$lista_posiciones = $obj_tabla_jugadores->getPosiciones();

#Cargamos en el objeto los jugadores
$obj_tabla_jugadores->getDatos();

#Definimos el jugador que se va a mostrar
$jugador = $obj_tabla_jugadores->read($id);