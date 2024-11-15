<?php

/**
 * clase: class.tabla_alumno$alumnos.php 
 * descripcion: define la clase que va a contener el array de objetos de la clase alumnos
 */

class Class_tabla_alumnos
{
    private $tabla;

    public function __construct()
    {
        $this->tabla = [];
    }

    /**
     * Get the value of tabla
     */
    public function getTabla()
    {
        return $this->tabla;
    }

    /**
     * Set the value of tabla
     */
    public function setTabla($tabla): self
    {
        $this->tabla = $tabla;

        return $this;
    }
    public function getCurso()
    {
        $cursos = [
            '1SMR',
            '2SMR',
            '1DAW',
            '2DAW',
            '1AD',
            '2AD'
        ];
        asort($cursos);
        return $cursos;
    }
    public function getAsignaturas()
    {
        $asignaturas = [
            'DWES',
            'DWEC',
            'Despliegue Aplicaciones',
            'HLC',
            'EINEM',
            'Diseño Interfaces'
        ];
        asort($asignaturas);
        return $asignaturas;
    }
    /**
     * método: getAlumnos()
     * descripcion: devuelve un array de objetos
     */
    public function getAlumnos()
    {
        # Alumno 1
        $alumno = new Class_alumno(
            1,
            'Andrés',
            'Rodríguez Pérez',
            'andresrp@gmail.com',
            '01-10-2003',
            2,            // Curso 1DAW
            [0, 2, 4]     // Asignaturas DWES, Despliegue Aplicaciones, EINEM
        );
        $this->tabla[] = $alumno;

        # Alumno 2
        $alumno = new Class_alumno(
            2,
            'Lucía',
            'Martínez Díaz',
            'luciamd@gmail.com',
            '12-03-2002',
            4,            // Curso 2DAW
            [1, 3, 5]     // Asignaturas DWEC, HLC, Diseño Interfaces
        );
        $this->tabla[] = $alumno;

        # Alumno 3
        $alumno = new Class_alumno(
            3,
            'Carlos',
            'Sánchez López',
            'carlossl@gmail.com',
            '25-06-2001',
            0,            // Curso 1SMR
            [0, 4]        // Asignaturas DWES, EINEM
        );
        $this->tabla[] = $alumno;

        # Alumno 4
        $alumno = new Class_alumno(
            4,
            'Sofía',
            'Gómez Torres',
            'sofiagt@gmail.com',
            '17-08-2002',
            1,            // Curso 2SMR
            [2, 5]        // Asignaturas Despliegue Aplicaciones, Diseño Interfaces
        );
        $this->tabla[] = $alumno;

        # Alumno 5
        $alumno = new Class_alumno(
            5,
            'Miguel',
            'Fernández García',
            'miguelfg@gmail.com',
            '09-11-2004',
            3,            // Curso 1DAW
            [1, 3, 4]     // Asignaturas DWEC, HLC, EINEM
        );
        $this->tabla[] = $alumno;
    }
    
    /**
     * Método: mostrar_nombre_categoria()
     * descripcion: devuelve un array con el nombre de las asignaturas
     * parámetros:
     *      -indice_asignaturas
     */

    public function mostrar_nombre_asignaturas($indice_asignaturas = [])
    {
        # Creo un array de nombre de asignaturas vacio
        $nombre_asignaturas = [];

        # Cargo el array de asignaturas de los alumnos
        $asignaturas_alumnos = $this->getAsignaturas();

        foreach ($indice_asignaturas as $indice_asignatura) {
            $nombre_asignaturas[] = $asignaturas_alumnos[$indice_asignatura];
        }
        # Ordeno
        asort($nombre_asignaturas);
        return $nombre_asignaturas;
    }
    /**
     * método: create()
     * descripcion: permite añadir un nuevo objeto de la clase alumno a la tabla
     * parámetros:
     *     - $alumno - objeto de a clase alumno
     */
    public function create(Class_alumno $alumno)
    {
        $this->tabla[] = $alumno;
    }



    /*
        método: read()
        descripcion: permite obtener el objeto de la clase alumno correspondiente a un índice 
        de la tabla

        parámetros:

            - $indice - índice de la tabla
    */
    public function read($indice) {
        return $this->tabla[$indice];
    }

    /*
        método: update()
        descripcion: permite actualizar los detalles de un alumno en la tabla

        parámetros:

            - $alumno - objeto de la clase alumno, con los detalles actualizados de dicho alumno
            - $indice - índice de la tabla
    */
    public function update(Class_alumno $alumno, $indice) {
        $this->tabla[$indice] = $alumno;
    }
    

    /*
        método: delete()
        descripcion: permite eliminar un alumno de la tabla

        parámetros:

            - $indice - índice de la tabla en la que se encuentra el alumno
    */
    public function delete($indice) {
        unset($this->tabla[$indice]);
    }
}
