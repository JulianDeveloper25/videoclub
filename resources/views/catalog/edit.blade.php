@extends('layouts.master')

@section('content')
<form method="POST" action="{{ url('catalog/' . $pelicula->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT') <!-- Esto es importante -->
    
    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" class="form-control" name="title" value="{{ $pelicula->title ?? '' }}">
    </div>
    
    <div class="form-group">
        <label for="year">Año</label>
        <input type="text" class="form-control" name="year" value="{{ $pelicula->year ?? '' }}">
    </div>
    
    <div class="form-group">
        <label for="director">Director</label>
        <input type="text" class="form-control" name="director" value="{{ $pelicula->director ?? '' }}">
    </div>
    
    <div class="form-group">
        <label for="poster">Poster</label>
        <input type="file" class="form-control" name="poster">
        @if(isset($pelicula->poster)) 
            <p>Carátula actual: <img src="{{ asset($pelicula->poster) }}" alt="Poster" style="height: 100px;"></p>
        @endif
    </div><!-- JULIAN ORTIZ -->
    
    <div class="form-group">
        <label for="synopsis">Resumen</label>
        <textarea class="form-control" name="synopsis">{{ $pelicula->synopsis ?? '' }}</textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">
        {{ isset($pelicula) ? 'Modificar película' : 'Añadir película' }}
    </button>
</form>
@endsection
