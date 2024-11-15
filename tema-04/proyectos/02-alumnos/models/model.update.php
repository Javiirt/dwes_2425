<?php


// Modelo: model.update.php
// Descripción: actualiza los datos del registro a partir de los detalles del formulario
//
// metod POST:
//     - id
//     - nombre
//     - apellidos
//     - email
//     - fecha de nacimiento
//     - curso
//     - asignaturas
//
// Método GET:
//     - indice (indice de la tabla correspondiente a dicho registro)

# Cargo los detalles del formulario
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$f_nacimiento = $_POST['f_nacimiento'];
$curso = $_POST['curso'];
$array_asignaturas = $_POST['asignaturas'];

# Cargo el índice de la tabla donde se encuentra el artículo
$indice = $_GET['indice'];

# Crear ub objeto de la clase alumnos a partir de los detalles del formulario
$alumno = new Class_alumno(
    $id,
    $nombre,
    $apellidos,
    $email,
    $f_nacimiento,
    $curso,
    $array_asignaturas
);

# Crear un objeto de la clase tabla_alumnos
$obj_tabla_alumnos = new Class_tabla_alumnos();

# Obtengo los articulos
$obj_tabla_alumnos->getAlumnos();

# Obtengo el array de marcas
$cursos = $obj_tabla_alumnos->getCurso();

# Obtengo el array de categorias
$asignaturas = $obj_tabla_alumnos->getAsignaturas();

# Actualizo la tabla 
$obj_tabla_alumnos->update($alumno, $indice);

#Defino la tabla
$array_alumnos = $obj_tabla_alumnos->getTabla();

