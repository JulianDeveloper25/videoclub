@extends('layouts.master')

@section('content')
<style>
    .movie-link {
        text-decoration: none; /* Quitar subrayado */
        color: red; /* Cambiar color a rojo */
        font-style:oblique
    }

    .movie-link:hover {
        color: darkred; /* Color al pasar el mouse */
    }
</style>
<!-- JULIAN ORTIZ -->
<div class="row">
    @foreach($peliculas as $pelicula)
    <div class="col-md-4"> <!-- Cambia esto según cuántas columnas quieras -->
        <div class="d-flex align-items-start mb-3"> <!-- Cambia a align-items-start -->
            <img src="{{ asset($pelicula->poster) }}" alt="{{ $pelicula->title }}" style="height: 150px; width: auto; margin-right: 15px;"> <!-- Aumenta la altura -->
            <div>
                <a href="{{ route('catalog.show', $pelicula->id) }}" class="movie-link">{{ $pelicula->title }}</a>
                <span>{{ $pelicula->year }}</span><br>
                <span>{{ $pelicula->director }}</span>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
