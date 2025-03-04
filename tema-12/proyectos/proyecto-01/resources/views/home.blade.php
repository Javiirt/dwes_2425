<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Home</title>
</head>

<body>
    <h1>{{ $title }} </h1>
    <h2>Hola Mundo</h2>
    <h3>Vistas en Laravel</h3>
    <h4>Nombre: {!! $nombre !!}</h4>
    <h5>{{ isset($curso) ? $curso : "Sin curso" }}</h5>
    <h6>{{ $ciclo ?? "Sin ciclo" }}</h6>


    {{-- -Comentario --}}


    @if($perfil == "Admin")
        <p>Bienvenido Administrador</p>
    @elseif($perfil == "editor")
        <p>Bienvenido Editor</p>
    @else
        <p>Bienvenido Invitado</p>
    @endif


    <!-- Mostrar ciudades -->
    <h5>Ciudades</h5>
    <ul>
        @foreach($ciudades as $ciudad)
            <li>{{ $ciudad }}</li>
        @endforeach
    </ul>



    <!-- Mostrar regiones -->
    <h5>Regiones</h5>
    <ul>
        @forelse($regiones as $region)
            <li>{{ $region }}</li>
        @empty
            <li>No hay regiones</li>
        @endforelse
    </ul>

</body>

</html>