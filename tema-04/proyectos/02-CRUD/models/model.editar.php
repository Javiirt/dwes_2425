<?php

/**
 * Modelo: model.editar.php 
 * Descripción: muestra un formulario donde se puede editar un articulo
 * 
 * 
 * Datos recibidos por el método GET:
 * - id
 */

#Recogemos los valores recibidos por el método GET
$id = $_GET['id'];

#Buscamos el articulo en la tabla ocn el id recibido
$articulo = $tabla->read($id);

#Definimos la lista de marcas
$lista_marcas = get_marcas();
