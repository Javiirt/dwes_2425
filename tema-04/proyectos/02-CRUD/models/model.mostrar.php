<?php

/**
 * Modelo: model.mostrar.php 
 * Descripción: muestra los datos de un articulo
 * 
 * 
 * Datos recibidos por el método GET:
 * - id
 */

#Recogemos los valores recibidos por el método GET
$id = $_GET['id'];

#Buscamos el articulo en la tabla ocn el id recibido
$articulo = $tabla->read($id);
