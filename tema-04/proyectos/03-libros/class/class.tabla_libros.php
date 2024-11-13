<?php

/*
    clase: class.tabla_libros.php
    descripcion: define la clase que va a contener el array de objetos de la clase artículos.
*/

class Class_tabla_libros
{

    public $tabla;

    public function __construct()
    {
        $this->tabla = [];
    }



    public function getMaterias()
    {
        $materias = [
            'Literatura Española',
            'Ciencias Sociales',
            'Matemáticas',
            'Ciencias de la Salud',
            'Ingeniería',
            'Tecnología',
            'Humanidades',
            'Artes',
            'Informática',
            'Religión'
        ];

        asort($materias);
        return $materias;
    }
    public function getEtiquetas()
    {
        $etiquetas = [
            'Antropología',
            'Sociología',
            'Psicología',
            'Economía',
            'Ciencia Política',
            'Derecho',
            'Educación',
            'Geografía',
            'Historia',
            'Ingeniería Civil',
            'Ingeniería Eléctrica',
            'Ingeniería Mecánica',
            'Ingeniería de Sistemas y Computación',
            'Robótica',
            'Inteligencia Artificial',
            'Telecomunicaciones',
            'Filosofía',
            'Teología',
            'Literatura',
            'Lingüística',
            'Historia del Arte',
            'Música',
            'Cine y Medios Audiovisuales',
            'Idiomas y Filología'
        ];

        asort($etiquetas);

        return $etiquetas;
    }

    /*
        método: getDatos()
        descripcion: devuelve un array de objetos
    */

    public function getDatos()
{
    // Libro 1 - 'Cien años de soledad'
    $libro = new Class_libro(
        1,
        'Cien años de soledad',
        'Gabriel García Márquez',
        'Editorial Sudamericana',
        '1967-06-05', // Fecha de edición en formato AAAA-MM-DD
        7, // Materia: Humanidades (índice 7)
        [1, 7, 20], // Etiquetas: 'Antropología' (1), 'Historia del Arte' (7), 'Literatura' (20)
        19.99
    );

    $this->tabla[] = $libro;

    // Libro 2 - 'El origen de las especies'
    $libro = new Class_libro(
        2,
        'El origen de las especies',
        'Charles Darwin',
        'John Murray',
        '1859-11-24',
        3, // Materia: Ciencias Sociales (índice 3)
        [3, 8, 9], // Etiquetas: 'Ciencia Política' (3), 'Geografía' (8), 'Historia' (9)
        25.50
    );

    $this->tabla[] = $libro;

    // Libro 3 - 'El gran diseño'
    $libro = new Class_libro(
        3,
        'El gran diseño',
        'Stephen Hawking',
        'Bantam Books',
        '2010-09-07',
        2, // Materia: Ciencias de la Salud (índice 2)
        [1, 9, 16], // Etiquetas: 'Filosofía' (1), 'Historia' (9), 'Inteligencia Artificial' (16)
        15.00
    );

    $this->tabla[] = $libro;

    // Libro 4 - 'Sapiens: De animales a dioses'
    $libro = new Class_libro(
        4,
        'Sapiens: De animales a dioses',
        'Yuval Noah Harari',
        'Harvill Secker',
        '2011-02-10',
        4, // Materia: Artes (índice 4)
        [1, 8, 9], // Etiquetas: 'Antropología' (1), 'Geografía' (8), 'Historia' (9)
        21.00
    );

    $this->tabla[] = $libro;

    // Libro 5 - 'Introducción a la programación en Python'
    $libro = new Class_libro(
        5,
        'Introducción a la programación en Python',
        'John Zelle',
        'Franklin, Beedle & Associates',
        '2010-09-15',
        5, // Materia: Informática (índice 5)
        [12, 15, 19], // Etiquetas: 'Ingeniería Civil' (12), 'Ingeniería Eléctrica' (15), 'Lingüística' (19)
        35.75
    );

    $this->tabla[] = $libro;
}




    /*
    método: mostrar_nombre_etiquetas()
    descripción: devuelve un array con el nombre de las categorías de libros
    parámetros:
        - indice_etiquetas: array de índices de categorías
*/
    public function mostrar_nombre_etiquetas($indice_etiquetas = [])
    {
        // Creo un array de nombres de categorías vacío
        $nombre_etiquetas = [];

        // Cargo el array de categorías de los libros
        $etiquetas_libros = $this->getEtiquetas();

        foreach ($indice_etiquetas as $indice_etiqueta) {
            $nombre_etiquetas[] = $etiquetas_libros[$indice_etiqueta];
        }

        // Ordeno
        asort($nombre_etiquetas);
        return $nombre_etiquetas;
    }

    /*
        método: create()
        descripción: permite añadir un objeto de la clase libro a la tabla
        parámetros:
            - $libro - objeto de la clase libro
    */
    public function create(Class_libro $libro)
    {
        $this->tabla[] = $libro;
    }

    /*
        método: read()
        descripción: permite obtener el objeto de la clase libro correspondiente a un índice de la tabla
        parámetros:
            - $indice - índice de la tabla
    */
    public function read($indice)
    {
        return $this->tabla[$indice];
    }

    /*
        método: update()
        descripción: permite actualizar los detalles de un libro en la tabla
        parámetros:
            - $libro - objeto de la clase libro, con los detalles actualizados de dicho libro
            - $indice - índice de la tabla
    */
    public function update(Class_libro $libro, $indice)
    {
        $this->tabla[$indice] = $libro;
    }

    /*
        método: delete()
        descripción: permite eliminar un libro de la tabla
        parámetros:
            - $indice - índice de la tabla en la que se encuentra el libro
    */
    public function delete($indice)
    {
        unset($this->tabla[$indice]);
    }

}
