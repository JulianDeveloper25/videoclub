<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Método para mostrar la página de inicio
    public function getHome()
    {
        // Retorna la vista de la página de inicio
        return view('home');
    }
}
//JULIAN ORTIZ