<?php

    class Alumno Extends Controller {

        function __construct() {

            parent ::__construct(); 
            
            
        }

        function render() {

            //Creo la propiedad de la vista
            $this->view->title = "Home - Panel de control de Alumnos";

            //Creo la propiedad alumnos para usar en la vista
            $this->view->alumnos = $this->model->get();

            
            $this->view->render('alumno/main/index');
        }
    }

?>