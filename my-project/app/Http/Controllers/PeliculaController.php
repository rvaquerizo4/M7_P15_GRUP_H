<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{

    public function index()
    {
        $peliculas = Pelicula::all();

        return view("peliculas.index", compact('peliculas'));
    }


    public function create()
    {
        return view("peliculas.create");
    }


    public function store(Request $request)
    {
        $pelicula = new Pelicula();

        $pelicula->titulo = $request->titulo;
        $pelicula->director = $request->director;
        $pelicula->genero = $request->genero;
        $pelicula->precio = $request->precio;

        $pelicula->save();

        return redirect() ->route('pelicula');
    }


    public function show(Pelicula $pelicula)
    {
        //
    }


    public function edit(Pelicula $pelicula)
    {
        //
    }


    public function update(Request $request, Pelicula $pelicula)
    {
        //
    }


    public function destroy(Pelicula $pelicula)
    {
        //
    }
}
