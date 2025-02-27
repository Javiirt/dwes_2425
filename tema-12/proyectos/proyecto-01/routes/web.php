<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});


// Ruta para listar usuarios
Route::get('/users', [UserController::class, 'index']);

// Ruta para mostrar un usuario específico
Route::get('/users/{id}', [UserController::class, 'show']);

// Ruta para crear un nuevo usuario
Route::get('/users/create', [UserController::class, 'create']);

// Ruta para editar un usuario específico
Route::get('/users/{id}/edit', [UserController::class, 'edit']);

// Ruta para almacenar un nuevo usuario
Route::post('/users', [UserController::class, 'store']);

// Ruta para actualizar un usuario específico
Route::put('/users/{id}', [UserController::class, 'update']);

// Ruta para eliminar un usuario específico
Route::delete('/users/{id}', [UserController::class, 'destroy']);


Route::resource('clients', UserController::class);



// Route::get('/hola', function () {
//     return 'Hola Mundo laravel - Juan Carlos';
// });


// // Ruta con parámetros
// Route::get('/saludo/{nombre}', function ($nombre) {
//     return 'Hola ' . $nombre;
// });

// // Ruta con parámetros opcionales
// Route::get('/post/{id}/comments/{comment_id}', function ($id, $comment_id) {
//     return 'Post ' . $id . ' - Comment ' . $comment_id;
// });



// Route::get('saludo/{name}/{nickname?}', function ($name, $nickname = null) {
//     if ($nickname) {
//         return "Bienvenido {$name}, tu apodo es {$nickname}";
//     } else {
//         return "Bienvenido {$name}, no tienes apodo";
//     }
// });


// // Ruta para /test
// Route::get('/test', function () {
//     $mensaje = 'Nombre: Javier Rodriguez<br>';
//     $mensaje .= 'Modulo: dwes<br>';
//     $mensaje .= 'Curso: 2º DAW<br>';
//     $mensaje .= 'Centro: IES Ntra. Sra. de los Remedios<br>';
//     $mensaje .= 'Prueba<br>';

//     return $mensaje;
// });

// // Ruta para /api/user
// Route::get('/api/user', function () {
//     return 'La informática no es solo una ciencia, es una forma de pensar. - Steve Jobs';
// });

// // Ruta para user/nombre/apellidos
// Route::get('/user/{nombre}/{apellidos}', function ($nombre, $apellidos) {
//     return "Nombre completo: {$nombre} {$apellidos}";
// });

// // Ruta para user/view/id
// Route::get('/user/view/{id?}', function ($id = null) {
//     if ($id) {
//         return "view: {$id}";
//     } else {
//         return "view: no id provided";
//     }
// });

// // Ruta con dos parámetros donde el segundo es opcional
// Route::get('/ruta/{param1}/{param2?}', function ($param1, $param2 = null) {
//     if ($param2) {
//         return "Parámetro 1: {$param1}, Parámetro 2: {$param2}";
//     } else {
//         return "Parámetro 1: {$param1}, Parámetro 2 no proporcionado";
//     }
// });



// // Ruta del controlador UserController
// Route::get('/users', 'UserController@index');


