<?php  

/**
 * alumnoModel.php
 * 
 * Modelo del controlador alumno.php
 * 
 * Métodos:
 *  - get()
 */
Class alumnoModel extends Model{

    /**
     * 
     * Método get()
     * 
     * Extrae los detalles de la tabla alumnos 
     * 
     */
    public function get(){
        try {
            //Sentencia sql
            $sql = "
                SELECT 
                    alumnos.id,
                    CONCAT(',', alumnos.nombre, alumnos.apellidos) as alumno,
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
                ON alumnos.id_curso = cursos.id
                ORDER BY alumnos.id
            ";

            //Conectamos con la base de datos
            $conexion = $this->db->connect();

            //ejecuto prepare
            $stmt = $conexion->prepare($sql);

            //Establezco el tipo de fetch
            $stmt->setFetchMode(PDO::FETCH_OBJ);

            //Ejecutamos
            $stmt->execute();

            //Devolvemos objeto pdostatement
            return $stmt;

        } catch (\Throwable $th) {

            //error base de datos
            require('template/patials/errorDB.patial.php');

            $stmt = null;

            $conexion = null;

            $this->db = null;

        }
    }
}