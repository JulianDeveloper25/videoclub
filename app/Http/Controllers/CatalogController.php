<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $peliculas = Movie::all();
        return view('catalog.index', compact('peliculas'));
    }

    public function create()
    {
        return view('catalog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'year' => 'required|integer',
            'director' => 'required',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'synopsis' => 'required',
        ]);

        $posterPath = $request->file('poster')->store('posters', 'public');

        $pelicula = new Movie();
        $pelicula->title = $request->title;
        $pelicula->year = $request->year;
        $pelicula->director = $request->director;
        $pelicula->poster = $posterPath;
        $pelicula->synopsis = $request->synopsis;
        $pelicula->rented = $request->has('rented');
        $pelicula->save();

        return redirect()->route('catalog.index')->with('success', 'Película agregada con éxito.');
    }

    public function show($id)
    {
        $pelicula = Movie::findOrFail($id);
        return view('catalog.show', compact('pelicula'));
    }

    public function edit($id)
    {
        $pelicula = Movie::findOrFail($id);
        return view('catalog.edit', compact('pelicula'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'year' => 'required|integer',
            'director' => 'required',
            'poster' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'synopsis' => 'required',
        ]);

        $pelicula = Movie::findOrFail($id);
        $pelicula->title = $request->title;
        $pelicula->year = $request->year;
        $pelicula->director = $request->director;

        if ($request->hasFile('poster')) {
            $posterPath = $request->file('poster')->store('posters', 'public');
            $pelicula->poster = $posterPath;
        }

        $pelicula->synopsis = $request->synopsis;
        $pelicula->rented = $request->has('rented');
        $pelicula->save();

        return redirect()->route('catalog.index')->with('success', 'Película actualizada con éxito.');
    }
}
