<?php
/*
  Class_profesor (sin encapsulamiento)

   Propiedades o atributos de la clase se declararán como PUBLIC:
   - id
   - nombre
   - apellidos
   - nrp
   - fecha_nacimiento
   - poblacion
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
    public $poblacion;
    public $especialidad;
    public $asignaturas;

    #Constructor
    public function __construct(
        $id = null,
        $nombre = null,
        $apellidos = null,
        $nrp = null,
        $fecha_nacimiento = null,
        $poblacion = null,
        $especialidad = null,
        $asignaturas = null
    ) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->nrp = $nrp;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->poblacion = $poblacion;
        $this->especialidad = $especialidad;
        $this->asignaturas = $asignaturas;
    }

    public function getEdad(){
        # Convertimos la fecha de nacimiento en un objeto DateTime
        $fechaNac = new DateTime($this->fecha_nacimiento);
        $fechaActual = new DateTime();

        # Calculo la diferencia entre la fecha actual y la fecha de nacimiento
        $diferencia = $fechaActual->diff($fechaNac);

        # Devolcmos la diferencia en años
        return $diferencia->y;


    }
}