<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    private $arrayPeliculas = [
        [
            'title' => 'Película 1',
            'year' => '2020',
            'director' => 'Director 1',
            'poster' => 'url_de_la_imagen_1.jpg',
            'synopsis' => 'Sinopsis de la película 1.',
            'rented' => false,
        ],
        [
            'title' => 'Película 2',
            'year' => '2021',
            'director' => 'Director 2',
            'poster' => 'url_de_la_imagen_2.jpg',
            'synopsis' => 'Sinopsis de la película 2.',
            'rented' => true,
        ],
    ];

    public function run()
    {
        $this->seedUsers();
        $this->seedCatalog();
        $this->command->info('Tablas inicializadas con datos!');
    }

    private function seedCatalog()
    {
        DB::table('movies')->delete();

        foreach ($this->arrayPeliculas as $pelicula) {
            Movie::create($pelicula);
        }
    }

    private function seedUsers()
    {
        DB::table('users')->delete();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // Cambia aquí la contraseña si deseas
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@example.com',
            'password' => Hash::make('password'), // Cambia aquí la contraseña si deseas
        ]);
    }
}
