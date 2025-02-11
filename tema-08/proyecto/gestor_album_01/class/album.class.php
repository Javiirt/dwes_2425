<?php

/*
    Creamos una clase para cada tabla
    las propiedades públicas y una propiedad para cada columna

    No respetará la propiedad de encapsulamiento.
*/

class classAlbum
{
    public $id;
    public $titulo;
    public $descripcion;
    public $autor;
    public $fecha;
    public $lugar;
    public $categoria;
    public $etiquetas;
    public $carpeta;
    public $num_fotos;
    public $num_visitas;


    public function __construct(
        $id = null,
        $titulo = null,
        $descripcion = null,
        $autor = null,
        $fecha = null,
        $lugar = null,
        $categoria = null,
        $etiquetas = null,
        $carpeta = null
    ) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->autor = $autor;
        $this->fecha = $fecha;
        $this->lugar = $lugar;
        $this->categoria = $categoria;
        $this->etiquetas = $etiquetas;
        $this->carpeta = $carpeta;
        $this->num_fotos = 0;
        $this->num_visitas = 0;

    }

}