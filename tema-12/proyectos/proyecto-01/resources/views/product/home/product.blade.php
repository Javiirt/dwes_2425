{{-- indico la plantilla de la cual se genera la vista --}}

@extends('layouts.layout')

{{-- modifico el titulo de la pagina --}}
@section('titulo', 'Panel de Control de Productos')

{{-- modifico el subtitulo de la pagina --}}
@section('subtitulo', 'Gestión de Productos')

{{-- modifico el contenido de la pagina --}}
@section('contenido')
    {{-- -mostrar imagen --}}
    <img src="{!!  asset('images/product.jpg') !!}}" alt="Producto" class="img-fluid img thumbnail" width="20%">
@endsection