<?php 

/**
 * Modelo: model.order.php 
 * Descripción: Ordena la tabla según un criterio seleccionado
 * 
 *  Metodo GET
 *  -criterio
 */


 #obtenemos criterio de ordenacion
$criterio = $_GET['criterio'];


#cargamos la tabla
$libros = get_tabla_libros();


#ordenamos la tabla
$aux = array_column($libros, $criterio);


#Ordenamos
array_multisort($aux, SORT_ASC, $libros);  