<?php
/*
    controlador: mostrar.php
    descripción: muestra los detalles de un jugador sin edición

    parámetros:

        - Método GET:
            - indice donde se ecuentra el jugador dentro de la tabla
*/

#Clases
include "class/class.jugador.php";
include "class/class.tabla_jugadores.php";

#Model
include "models/model.mostrar.php";

#Vista
include "views/view.mostrar.php";