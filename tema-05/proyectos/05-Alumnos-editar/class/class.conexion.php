<?php

/*
    Clase conexión mediante mysqli
*/

class Class_conexion
{
    public $db;

    public function __construct(

    ) {
        try {
            // realizo la conexión
            $this->db = new mysqli(SERVER, USER, PASS, BD);

        } catch (mysqli_sql_exception $e) {

            include "views/partials/partial.errorDB.php";

            //Cierro conexion
            $this->db->close();

            //Cancelo ejecucion del programa
            exit();
        }



    }

}