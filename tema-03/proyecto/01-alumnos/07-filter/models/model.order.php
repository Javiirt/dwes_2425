<?php 

/**
 * Modelo: model.order.php 
 * Ordena la tabla
 * 
 *  Metodo GET
 *  -id
 */


 #obtenemos criterio de ordenacion
$criterio = $_GET['criterio'];


#cargamos la tabla
$alumnos = get_tabla_alumnos();


#ordenamos la tabla

$aux = array_column($alumnos, $criterio);


#Ordenamos
array_multisort($aux, SORT_ASC, $alumnos);  