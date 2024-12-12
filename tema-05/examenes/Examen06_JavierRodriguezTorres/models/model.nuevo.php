<?php

/*
    Modelo: model.nuevo.php
    Descripción: genera los datos necesarios para añadir nuevo libro
*/

# Creo un objeto de la clase Class_tabla_libros
$tabla_libros = new Class_tabla_libros();

# Obtengo la lista de generos disponibles
$stmt_generos = $tabla_libros->get_generos();

# Obtengo la lista de autores disponibles
$stmt_autores = $tabla_libros->get_autores();

# Obtengo la lista de editoriales disponibles
$stmt_editoriales = $tabla_libros->get_editoriales();


                    