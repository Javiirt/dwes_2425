<?php
/*
  Claas_tabla_profesores (sin encapsulamientos)

    Propiedades o atributos de la clase:
    - tabla

    Métodos de la clase:
    - constructor. Inicializa la tabla a un array vacío.
    - create() - añade un nuevo objeto de usuario a la tabla.
    - read() - Devuelve un objeto usuario a partir del índice
    - update() - Actualiza los detalles de un usuario, los parámetros son el objeto usuario y el índice.
    - delete() - Elimina un objeto usuario a partir del índice.
    - getDatos() - generará la tabla con los datos de al menos 5 profesores
    - getEspecialidades() - array con todas las especialidades
    - getAsignaturas() - array con todas las asignaturas
 */


class Class_profesor
{

    #Variables
    public $tabla;

    #Constructor. Inicializa la tabla a un array vacío.
    public function __construct(
        $tabla = null
    ) {
        $this->tabla = $tabla;
    }


    # create() - añade un nuevo objeto de usuario a la tabla.
    public function create($profesor)
    {
        $this->tabla[] = $profesor;
    }


    # read() - Devuelve un objeto usuario a partir del índice
    public function read($indice)
    {
        return $this->tabla[$indice];
    }


    # update() - Actualiza los detalles de un usuario, los parámetros son el objeto usuario y el índice.
    public function update($profesor, $indice)
    {
        $this->tabla[$indice] = $profesor;
    }


    # delete() - Elimina un objeto usuario a partir del índice.
    public function delete($indice)
    {
        unset($this->tabla[$indice]);
    }


    # getDatos() - generará la tabla con los datos de al menos 5 profesores
    public function getDatos()
    {
        // Profesor 1
        $profesor = new Class_profesor(
            1,
            'Luis',
            'González Pérez',
            '12345',
            '1980-04-15',
            'Madrid',
            8, // Informática
            [0, 1, 2] // Sistemas informáticos, Bases de datos, Programación
        );
        $this->tabla[] = $profesor;

        // Profesor 2
        $profesor = new Class_profesor(
            2,
            'María',
            'López Martínez',
            '54321',
            '1975-11-10',
            'Barcelona',
            3, // Ciencias de la Salud
            [10, 11] // FOL, Proyecto de desarrollo de aplicaciones web
        );
        $this->tabla[] = $profesor;

        // Profesor 3
        $profesor = new Class_profesor(
            3,
            'Carlos',
            'Fernández Ruiz',
            '67890',
            '1985-07-22',
            'Sevilla',
            4, // Ingeniería
            [5, 6, 7] // Desarrollo web en entorno cliente, servidor, Despliegue
        );
        $this->tabla[] = $profesor;

        // Profesor 4
        $profesor = new Class_profesor(
            4,
            'Ana',
            'Martínez Gómez',
            '09876',
            '1990-01-05',
            'Valencia',
            10, // Inglés
            [12] // Inglés técnico
        );
        $this->tabla[] = $profesor;

        // Profesor 5
        $profesor = new Class_profesor(
            5,
            'Javier',
            'Sánchez López',
            '11223',
            '1988-09-18',
            'Bilbao',
            5, // Tecnología
            [8, 9] // Diseño de interfaces web, Empresa e iniciativa emprendedora
        );
        $this->tabla[] = $profesor;
    }



    # getEspecialidades() - array con todas las especialidades
    public function getEspecialidades()
    {
        $array = [
            'Literatura Española',
            'Ciencias Sociales',
            'Matemáticas',
            'Ciencias de la Salud',
            'Ingeniería',
            'Tecnología',
            'Humanidades',
            'Artes',
            'Informática',
            'Religión',
            'Inglés'
        ];

        asort($array);
        return $array;
    }


    # getAsignaturas() - array con todas las asignaturas
    public function getAsignaturas()
    {
        $array = [
            'Sistemas informáticos',
            'Bases de datos',
            'Programación',
            'Lenguajes de marcas y sistemas de gestión de información',
            'Entornos de desarrollo',
            'Desarrollo web en entorno cliente (JavaScript, HTML, CSS)',
            'Desarrollo web en entorno servidor (PHP, Node.js, u otros)',
            'Despliegue de aplicaciones web',
            'Diseño de interfaces web',
            'Empresa e iniciativa emprendedora',
            'Formación y orientación laboral (FOL)',
            'Proyecto de desarrollo de aplicaciones web (normalmente al final del ciclo)',
            'Inglés técnico'
        ];

        asort($array);
        return $array;
    }
}