@extends('layouts.master')

@section('content')

<!-- Mensajes de éxito o error -->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Formulario para añadir una película -->
<form method="POST" action="{{ url('catalog') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" class="form-control" name="title" required>
    </div>
    <div class="form-group">
        <label for="year">Año</label>
        <input type="text" class="form-control" name="year" required>
    </div>
    <div class="form-group">
        <label for="director">Director</label>
        <input type="text" class="form-control" name="director" required>
    </div>
    <div class="form-group">
        <label for="poster">Poster</label>
        <input type="file" class="form-control" name="poster" required>
    </div>
    <div class="form-group">
        <label for="synopsis">Sinopsis</label>
        <textarea class="form-control" name="synopsis" required></textarea>
    </div><!-- JULIAN ORTIZ -->
    <div class="form-group">
        <label for="rented">Alquilada</label>
        <input type="checkbox" name="rented">
    </div>
    <button type="submit" class="btn btn-primary">Añadir Película</button>
</form>
@endsection
