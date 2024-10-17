@extends('layouts.master')

@section('content')
<style>
    h1{
        text-align: center
    }

    form{
        display: flex;
        justify-content: center;
       
        flex-direction: column;
        padding: 20px;
        width: 40%;
        position: relative;
        left: 30%;
        
    }

    form > div{
        
        display: flex;
        justify-content: center;
        padding: 20px;
        flex-direction: column;
        text-align: center
    }

    form > div > input{
        width: 50%;
        position: relative;
        left: 25%;
        border-radius: 20px;
        border: 1px solid black;
        padding: 5px;
    }
</style>
    <h1>Iniciar Sesión</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email">Correo electrónico</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label for="password">Contraseña</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Iniciar Sesión</button>
    </form>
@endsection

