@extends('layouts.master')

@section('content')
    <h1>Iniciar Sesión</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email">Correo electrónico:</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Iniciar Sesión</button>
    </form>
@endsection
