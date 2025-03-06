@extends('layout.layout')
@section('titulo', 'Detalles del Producto')

@section('contenido')
    @include('products.partials.menu')

    <div class="card">
        <div class="card-header">
            <h5>Detalles del Producto #{{ $product['id'] }}</h5>
        </div>
        <div class="card-body">
            <p><strong>Descripción:</strong> {{ $product['descripcion'] }}</p>
            <p><strong>Modelo:</strong> {{ $product['modelo'] }}</p>
            <p><strong>Precio:</strong> {{ $product['precio'] }}</p>
            <p><strong>Unidades:</strong> {{ $product['unidades'] }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('products.index') }}" class="btn btn-primary">Volver</a>
        </div>
    </div>
@endsection
