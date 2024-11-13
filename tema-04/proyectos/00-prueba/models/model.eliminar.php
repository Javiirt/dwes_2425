<?php

/**
 * Modelo: model.eliminar.php 
 * Descripción: elimina un articulo de la tabla
 * 
 * 
 * Datos recibidos por el método GET:
 * - id
 */

#Recogemos los valores recibidos por el método GET
$id = $_GET['id'];

#Buscamos el articulo en la tabla ocn el id recibido
$articulo = $tabla->read($id);

#Definimos la lista de articulos
$tabla_articulos = $tabla->delete($id);

#Mostramos un alert sobre la eliminacion
echo "<script>alert('Artículo eliminado');</script>";
