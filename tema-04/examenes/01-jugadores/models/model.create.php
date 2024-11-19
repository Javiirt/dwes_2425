<?php
/*
    autor: model.create.php
    descripción: añade el nuevo jugador a la tabla
    
    Métod POST:
        - id
        - nombre
        - f_nacimiento
        - altura
        - peso
        - nacionalidad
        - num_camiseta
        - valor_mercado
        - equipo_id
        - posiciones_id
        
*/

#Almacenamos las variables recibidas por el método POST
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$f_nacimiento = $_POST["fechaNacimiento"];
$altura = $_POST["altura"];
$peso = $_POST["peso"];
$nacionalidad = $_POST["nacionalidad"];
$num_camiseta = $_POST["numeroCamiseta"];
$valor_mercado = $_POST["valor"];
$equipo_id = $_POST["equipo"];
$posiciones_id = $_POST["posiciones"];

#Creamos un objeto Class_jugador a partir de los datos recibidos
$juagdor = new Class_jugador(
    $id,
    $nombre,
    $f_nacimiento,
    $altura,
    $peso,
    $nacionalidad,
    $num_camiseta,
    $valor_mercado,
    $equipo_id,
    $posiciones_id,
);


#Creamos un objeto de tipo Class_tabla_jugadores
$obj_tabla_jugadores = new Class_tabla_jugadores();

#Definimos la lista de equipos
$lista_equipos = $obj_tabla_jugadores->getEquipos();

#Definimos la lista de posiciones
$lista_posiciones = $obj_tabla_jugadores->getPosiciones();

#Cargamos en el objeto los jugadores
$obj_tabla_jugadores->getDatos();

#Añadimos el nuevo jugador a la lista
$obj_tabla_jugadores->create($juagdor);

#Definimos la lista de jugadores
$lista_jugadores = $obj_tabla_jugadores->tabla;