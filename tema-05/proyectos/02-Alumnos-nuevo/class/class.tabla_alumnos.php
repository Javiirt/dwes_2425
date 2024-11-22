<?php

/*
    clase: class.tabla_articulos.php
    descripcion: define la clase que va a contener el array de objetos de la clase alumnos.
*/

class Class_tabla_alumnos extends Class_conexion
{


    /*
        método: getAlumnos()
        descripcion: devuelve un array de objetos
    */

    public function getAlumnos()
    {
        $sql = "
            SELECT
                alumnos.id,
                alumnos.nombre,
                alumnos.apellidos,
                alumnos.email,
                alumnos.telefono,
                alumnos.nacionalidad,
                alumnos.dni,
                timestampdiff(YEAR, alumnos.fechaNac, now()) as edad,
                cursos.nombreCorto as curso
            FROM
                alumnos 
            INNER JOIN 
                cursos 
            ON cursos.id = alumnos.id_curso; 
        ";

        // ejecuto comando sql
        $result = $this->db->query($sql);

        // obtengo un objeto de la clase mysqli_result
        // deuelvo dicho objeto
        return $result;

    }

    /*
        método: create()
        descripcion: permite añadir un objeto de la clase artículo a la tabla
        parámetros:

            - $articulo - objeto de la clase artículos

    */
    public function create(Class_alumno $alumno)
    {
        # Preparar la sentencia
        $sql = "INSERT INTO 
                alumnos (
                    id, 
                    nombre, 
                    apellidos,
                    email,
                    telefono,
                    nacionalidad,
                    dni,
                    fechaNac,
                    id_curso
                ) 
                VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?);";

        $stmt = $this->db->prepare($sql);

        # Verificar la sentencia preparada
        if (!$stmt) { // La verificación correcta es que $stmt sea false si ocurre un error
            die('ERROR AL PREPARAR SQL: ' . $this->db->error);
        }


        # Vincular los parámetros
        $stmt->bind_param(
            "sssisssi",
            $nombre,
            $apellidos,
            $email,
            $telefono,
            $nacionalidad,
            $dni,
            $fechaNac,
            $id_curso
        );

        # Datos de prueba
        $nombre = $alumno->nombre;
        $apellidos = $alumno->apellidos;
        $email = $alumno->email;
        $telefono = $alumno->telefono;
        $nacionalidad = $alumno->nacionalidad;
        $dni = $alumno->dni;
        $fechaNac = $alumno->fechaNac;
        $id_curso = $alumno->id_curso; // Por ejemplo, el ID de un curso existente en la base de datos

        $stmt->execute();
    }

    /*
        método: getCursos()
        descripcion: devuelve un array asociativo
    */

    public function getCursos()
    {
        $sql = "
            SELECT
                id,
                nombreCorto as curso
            FROM
                cursos 
            ORDER BY 
                nombreCorto ASC
        ;";

        // ejecuto comando sql
        $result = $this->db->query($sql);

        // deuelvo todos los valores de la tabla cursos
        return $result->fetch_all(MYSQLI_ASSOC);

    }



    /*
        método: read()
        descripción: permite obtener el objeto de la clase artículo  correspondiente a un índice de la tabla
        parámetros:
            - $indice - índice de la tabla
    */

    public function read($indice)
    {
        return $this->tabla[$indice];
    }


    /*
        método: update()
        descripción: permite actualizar los detalles de un artículo en la tabla

        parámetros:
            $articulo - objeto de la clase artículo, con los detalles actualizados
            $ indice - indice de la tabla
    */

    public function update(Class_alumno $alumno, $indice)
    {
        $this->tabla[$indice] = $alumno;
    }

    /*
        método: delete()
        descripción: permite eliminar un alumno en la tabla

        parámetros:
            $ indice - indice de la tabla en la que se encuentra el articulo
    */

    public function delete($indice)
    {
        unset($this->tabla[$indice]);
    }
}
