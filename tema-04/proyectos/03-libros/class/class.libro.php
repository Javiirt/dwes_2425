<?php

    /*
        archivo:class.libro.php
        titulo: define la clase libro con propiead encapsulamiento
    */

    class Class_libro {

        public $id;
        public $titulo;
        public $autor;
        public $editorial;
        public $fechaEdicion;
        public $materia;
        public $etiquetas;
        public $precio;

        public function __construct(
            $id = null,
            $titulo = null, 
            $autor = null, 
            $editorial = null, 
            $fechaEdicion = null, 
            $materia = null, 
            $etiquetas = [], 
            $precio = null
            ) {
                $this->id = $id;
                $this->titulo = $titulo;
                $this->autor = $autor;
                $this->editorial = $editorial;
                $this->fechaEdicion = $fechaEdicion;
                $this->materia = $materia;
                $this->etiquetas = $etiquetas;
                $this->precio = $precio;
            } 

       
    }