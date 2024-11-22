<?php
/*
    autor: model.create.php
    descripción: añade el nuevo artículo a la tabla
    
    Métod POST:
        - id
        - nombre
        - apellidos
        - telefono
        - nacionalidad (indice)
        - dni (array)
        - id_curso
*/

# Cargo los detalles del  formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$fechaNac = $_POST['fechaNac'];
$gmail = $_POST['gmail'];
$telefono = $_POST['telefono'];
$nacionalidad = $_POST['nacionalidad'];
$dni = $_POST['dni'];
$id_curso = $_POST['id_curso'];


# Validación

# Creo un objeto de la clase tabla alumnos
$obj_tabla_alumnos = new Class_tabla_alumnos(
    'localhost',
    'root',
    '',
    'fp'
);

# Cargo los libros
$obj_tabla_alumnos->getAlumnos();

# Crear un objeto de la clase alumno a partir de los detalles del formulario
$alumno = new Class_alumno(
    null,
    $nombre,
    $apellidos,
    $fechaNac,
    $gmail,
    $telefono,
    $nacionalidad,
    $dni,
    $id_curso
);

# Añadir el alumno a la tabla
$obj_tabla_alumnos->create($alumno);

#Redirecciono al controlador index
header("location: index.php");

# Obtener la array alumnos
#$alumnos = $obj_tabla_alumnos->getAlumnos();