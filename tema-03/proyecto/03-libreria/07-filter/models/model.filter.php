<?php 

/**
 * Modelo: model.filter.php 
 * Ordena la tabla
 * 
 *  Metodo GET
 *  -expresion
 */


 #obtenemos criterio de ordenacion
$expresion = $_GET['expresion'];


#cargamos la tabla
$libros = get_tabla_libros();


#filtramos la tabla a partir de la expresion

//Creo un array vacio donde ire cargando las filas que cumplen con la expresion de filtrado
$aux = [];

//Recorrer el array fila a fila para comprobar la expresion 
foreach ($libros as $registro) {
    if(array_search($expresion, $registro, false)) {
        $aux[] = $registro;
    }
}

$libros = $aux;