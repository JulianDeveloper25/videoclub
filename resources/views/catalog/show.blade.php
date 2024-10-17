@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <div class="d-flex align-items-start"> <!-- Usamos d-flex y align-items-start para alinear todo al inicio -->
        <div class="me-3"> <!-- Margen a la derecha para separar imagen y texto -->
            <img src="{{ asset($pelicula->poster) }}" style="height: 400px; width: auto;"/> <!-- Imagen -->
        </div><!-- JULIAN ORTIZ -->
        <div> <!-- Contenedor de texto -->
            <h2>{{ $pelicula->title }} ({{ $pelicula->year }})</h2>
            <p><strong>Director: </strong>{{ $pelicula->director }}</p>
            <p><strong>Sinopsis: </strong>{{ $pelicula->synopsis }}</p>
            <p>
                <strong>Estado: </strong>
                @if($pelicula->rented)
                    Película actualmente alquilada
                    <a href="#" class="btn btn-danger btn-sm">Devolver película</a>
                @else
                    Película disponible
                    <a href="#" class="btn btn-primary btn-sm">Alquilar película</a>
                @endif
            </p>
            <a href="{{ route('catalog.edit', $pelicula->id) }}" class="btn btn-warning btn-sm">Editar película</a>

            <a href="{{ url('/catalog') }}" class="btn btn-default btn-sm">Volver al listado</a>
        </div>
    </div>
</div>
@endsection
