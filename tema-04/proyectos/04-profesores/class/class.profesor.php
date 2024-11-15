<?php
/*
  Class_profesor (sin encapsulamiento)

   Propiedades o atributos de la clase se declararán como PUBLIC:
   - id
   - nombre
   - apellidos
   - nrp
   - fecha_nacimiento
   - población
   - especialidad (lista desplegable)
   - asignaturas (lista checkbox)

   Métodos de la clase:
   - __construct()
 */


class Class_profesor
{

    #Variables
    public $id;
    public $nombre;
    public $apellidos;
    public $nrp;
    public $fecha_nacimiento;
    public $población;
    public $especialidad;
    public $asignaturas;

    #Constructor
    public function __construct(
        $id = null,
        $nombre = null,
        $apellidos = null,
        $nrp = null,
        $fecha_nacimiento = null,
        $población = null,
        $especialidad = null,
        $asignaturas = null
    ) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->nrp = $nrp;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->población = $población;
        $this->especialidad = $especialidad;
        $this->asignaturas = $asignaturas;
    }
}