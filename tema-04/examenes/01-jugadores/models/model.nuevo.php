<?php

/*
    Modelo: model.nuevo.php
    Descripción: genera los datos necesarios para añadir nuevo jugador
*/


#Creamos un objeto de tipo Class_tabla_jugadores
$obj_tabla_jugadores = new Class_tabla_jugadores();

#Definimos la lista de equipos
$lista_equipos = $obj_tabla_jugadores->getEquipos();

#Definimos la lista de posiciones
$lista_posiciones = $obj_tabla_jugadores->getPosiciones();


