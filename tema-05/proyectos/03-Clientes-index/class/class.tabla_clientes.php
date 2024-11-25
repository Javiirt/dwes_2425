<?php

/*
    clase: class.tabla_clientes.php
    descripcion: define la clase que va a contener el array de objetos de la clase clientes.
*/

class Class_tabla_clientes extends Class_conexion
{


    /*
        método: getclientes()
        descripcion: devuelve un array de objetos
    */

    public function getClientes()
    {
        $sql = "
            SELECT
                alumnos.id,
                alumnos.nombre,
                alumnos.apellidos,
                alumnos.email,
                alumnos.telefono,
                alumnos.direccion,
                alumnos.poblacion,
                alumnos.provincia,
                alumnos.nacionalidad,
                alumnos.dni,
                timestampdiff(YEAR, alumnos.fechaNac, now()) as edad,
                cursos.nombreCorto as curso
            FROM 
                alumnos 
            INNER JOIN
                cursos
            ON alumnos.id_curso = cursos.id
        ";

        // ejecuto comando sql
        $result = $this->db->query($sql);

        // obtengo un objeto de la clase mysqli_result
        // deuelvo dicho objeto
        return $result;
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
}
