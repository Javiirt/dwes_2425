<?php

/*
    clase: class.tabla_jugadores.php
    descripcion: define la clase que va a contener el array de objetos de la clase jugadores.
*/

class Class_tabla_jugadores
{
    #Variable pública (sin encapsulamiento)
    public $tabla;

    #Definimos el constructor
    public function __construct(
        $tabla = null
    ) {
        $this->tabla = $tabla;
    }


    /*create()
    Descripción: Permite añadir un objeto de la clase jugador al array.
    Parámetros de entrada: objeto de la clase jugador */
    public function create(Class_jugador $jugador)
    {
        $this->tabla[] = $jugador;
    }

    /*read()
    Devuelve el objeto de la clase jugador asociado a un índice del array
    Parámetros de entrada: índice del array*/
    public function read($indice)
    {
        return $this->tabla[$indice];
    }

    /*getEquipos()
    Descripción: devuelve un array adjunto con todos los equipos de primera división. Podéis usar chatGPT*/
    public function getEquipos()
    {

        $equipos = [
            "Alavés",
            "Almería",
            "Athletic Club",
            "Atlético de Madrid",
            "Barcelona",
            "Cádiz",
            "Celta de Vigo",
            "Getafe",
            "Girona",
            "Granada",
            "Las Palmas",
            "Mallorca",
            "Osasuna",
            "Rayo Vallecano",
            "Real Betis",
            "Real Madrid",
            "Real Sociedad",
            "Sevilla",
            "Valencia",
            "Villarreal"

        ];

        return $equipos;
    }

    /*getPosiciones()
    Descripción: devuelve un array con los nombres de las distintas posiciones que un jugador puede ocupar en el terreno de juego: portero, lateral, central, medio centro, centrocampista, extremo y delantero. Podéis usar chatGPT*/
    public function getPosiciones()
    {

        $posiciones = [
            "Portero",
            "Defensa Central",
            "Lateral Derecho",
            "Lateral Izquierdo",
            "Mediocentro Defensivo",
            "Mediocentro",
            "Mediocentro Ofensivo",
            "Extremo Derecho",
            "Extremo Izquierdo",
            "Delantero Centro"
        ];

        return $posiciones;
    }

    /*getDatos()
    Crear el método getDatos() que permita añadir al array al menos 5 jugadores. Usar datos reales. Podéis usar chapGPT*/
    public function getDatos()
    {
        // Array de jugadores
        $this->tabla = [
            new Class_jugador(
                1,
                "Thibaut Courtois",
                "1992-05-11",
                2.00,
                96,
                "Bélgica",
                1,
                60000000,
                15, // Índice correspondiente a "Real Madrid"
                [0] // Índice correspondiente a "Portero"
            ),
            new Class_jugador(
                2,
                "Pedri González",
                "2002-11-25",
                1.74,
                60,
                "España",
                8,
                100000000,
                4, // Índice correspondiente a "Barcelona"
                [6, 5] // Índices correspondientes a "Mediocentro Ofensivo" y "Mediocentro"
            ),
            new Class_jugador(
                3,
                "Iñaki Williams",
                "1994-06-15",
                1.86,
                78,
                "Ghana",
                9,
                30000000,
                2, // Índice correspondiente a "Athletic Club"
                [7, 9] // Índices correspondientes a "Extremo Derecho" y "Delantero Centro"
            ),
            new Class_jugador(
                4,
                "Antoine Griezmann",
                "1991-03-21",
                1.76,
                73,
                "Francia",
                7,
                25000000,
                3, // Índice correspondiente a "Atlético de Madrid"
                [9, 6] // Índices correspondientes a "Delantero Centro" y "Mediocentro Ofensivo"
            ),
            new Class_jugador(
                5,
                "Borja Iglesias",
                "1993-01-17",
                1.87,
                86,
                "España",
                9,
                20000000,
                14, // Índice correspondiente a "Real Betis"
                [9] // Índice correspondiente a "Delantero Centro"
            )
        ];

    }


    /*mostrar_nombre_posicines()
    Devuelve el nombre de las posiciones a partir del array de posiciones de un jugador
    Parámetros entrada: array de índice de posiciones de un jugador.*/
    public function mostrar_nombre_posiciones($indices)
    {
        $lista_nombres = [];
        $lista_posiciones = $this->getPosiciones();

        foreach ($indices as $key => $value) {
            $lista_nombres[] =  $lista_posiciones[$value];
        }

        return $lista_nombres;
    }

}