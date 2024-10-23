<?php


/**
 * Clase: class.vehiculo.php 
 * Descripcion: definiciion de la clase vehiculo
 * Autor:
 * Versión:
 * Fecha:
 */


class Class_vehiculo
{
    #Propiedades de la clase
    public $matricula;
    public $velocidad;

    #Métodos de la clase

    //Constructor
    //Método que se ejecuta automaticamente cuando se crea un objeto a partir de dicha clase
    public function __construct(
        $matricula=null,
        $velocidad=null
    )
    {
        $this->matricula = $matricula;
        $this->velocidad = $velocidad;
    }

    //Método que devuelve la propiedad matricula
    public function getMatricula()
    {
        return $this->matricula;
    }

    //Método que devuelve la propiedad velocidad
    public function getVelocidad()
    {
        return $this->velocidad;
    }

    //Método que define la propiedad matricula
    public function setMatricula($pMatricula)
    {
        $this->matricula = $pMatricula;
    }

    //Método que define la propiedad velocidad
    public function setVelocidad($pVelocidad)
    {
        $this->velocidad = (float) $pVelocidad;
    }

    //Método que incrementa la propiedad velocidad
    public function aumentarVelocidad()
    {
        $this->velocidad++;
    }

    //Método que disminuye la propiedad velocidad
    public function disminuirVelocidad()
    {
        $this->velocidad--;
    }

    //Método que disminuye la propiedad velocidad = 0
    public function parar()
    {
        $this->velocidad = 0;
    }
}
?>