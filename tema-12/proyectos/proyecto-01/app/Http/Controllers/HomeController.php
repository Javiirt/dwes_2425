<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $title = 'Título de la página';
        $curso = 'Curso de Laravel';
        $nombre = 'Javier';
        $ciclo = 'Desarrollo de Aplicaciones Web';
        $perfil = 'Admin';
        $ciudades = [
            'Madrid',
            'Barcelona',
            'Valencia',
            'Sevilla',
            'Zaragoza',
            'Málaga',
            'Murcia',
            'Palma',
            'Las Palmas',
            'Bilbao'
        ];

        $regiones = [
        ];
        //cargo la vista principal
        // return view(
        //     'home',
        //     compact(
        //         'title',
        //         'curso',
        //         'nombre',
        //         'perfil',
        //         'ciudades',
        //         'regiones'
        //     )
        // );

        return view('home');
    }
}
