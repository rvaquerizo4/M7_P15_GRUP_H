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


    public function edit($id)
    {
        // funcion para modificar
        $pelicula = Pelicula::find($id);

        return view("peliculas.edit", compact("pelicula"));
    }


    public function update(Request $request, $id)
    {
        $pelicula = Pelicula::find($id);
    
        $pelicula->update($request->all());
    
        return redirect()->route('pelicula');
    }
    


    public function destroy($id)
    {
        // Funcion para eliminar 
        $pelicula = Pelicula::find($id);
        
        $pelicula->delete();

        
        return redirect()->route('pelicula');
    }
}
