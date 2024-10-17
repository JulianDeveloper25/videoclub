<?php

// app/array_peliculas.php

return [
    [
        'title' => 'Pelicula 1',
        'year' => 2000,
        'director' => 'Director 1',
        'poster' => asset('images/OIP (5).jpeg'),  // URL de la carátula
        'synopsis' => 'Esta es una breve sinopsis de la película 1.',
        'rented' => false
    ],
    [
        'title' => 'Pelicula 2',
        'year' => 2005,
        'director' => 'Director 2',
        'poster' => asset('images/TDK000.jpg'),
        'synopsis' => 'Sinopsis corta de la película 2.',
        'rented' => true
    ],
    // Agrega más películas aquí
];
