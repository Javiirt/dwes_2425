<?php

/**
 * clase: class.calculadora.php 
 * descripcion: define clase calculadora
 *      -Propiedades: valor1, valor2, operador, resultado
 *      -Metodos: suma(), resta(), division(), multiplicacion(), potencia()
 */

class Class_calculadora
{
    #Atributos de la clase
    private $valor1;
    private $valor2;
    private $operador;
    private $resultado;


    //Constructor
    //Método que se ejecuta automaticamente cuando se crea un objeto a partir de dicha clase
    public function __construct(
        $valor1 = 0,
        $valor2 = 0,
        $operador = null,
        $resultado = 0
    ) {
        $this->valor1 = $valor1;
        $this->valor2 = $valor2;
        $this->operador = $operador;
        $this->resultado = $resultado;
    }

    //Método que devuelve la propiedad valor1
    public function getValor1()
    {
        return $this->valor1;
    }

    //Método que devuelve la propiedad valor2
    public function getValor2()
    {
        return $this->valor2;
    }

    //Método que devuelve la propiedad operador
    public function getOperador()
    {
        return $this->operador;
    }

    //Método que devuelve la propiedad resultado
    public function getResultado()
    {
        return $this->resultado;
    }

    //Método que define la propiedad valor1
    public function setValor1($pValor1)
    {
        $this->valor1 = $pValor1;
    }

    //Método que define la propiedad valor2
    public function setValor2($pValor2)
    {
        $this->valor2 = $pValor2;
    }

    //Método que define la propiedad operador
    public function setOperador($pOperador)
    {
        $this->operador = $pOperador;
    }

    //Método que define la propiedad resultado
    public function setResultado($pResultado)
    {
        $this->resultado = $pResultado;
    }

    //Método que realiza una suma de los valores
    public function suma()
    {
        $this->operador = '+';
        $this->resultado = $this->valor1 * $this->valor2;
    }

    //Método que realiza una resta de los valores
    public function resta()
    {

    }

    //Método que realiza una division de los valores
    public function division()
    {

    }

    //Método que realiza una multiplicacion de los valores
    public function multiplicacion()
    {

    }

    //Método que realiza una potencia de los valores
    public function potencia()
    {

    }


}