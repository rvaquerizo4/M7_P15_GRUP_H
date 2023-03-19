@extends('layouts.main-layout')
@section('page-title', 'Edit')
@section('content')

<form action="{{ route('pelicula.update', ['id' => $pelicula->id]) }}" method="POST"
    class="bg-white w-1/3 p-4 border-gray-10@ shadow-xl rounded-lg">
    @csrf
    @method('put')
    <h2 class="text-2xl text-center py-4 mb-4 font-semibold">
        Edit Pelicula {{ $pelicula->id }}
    </h2>

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded"
    placeholder="Titulo" name="titulo" value="{{ $pelicula->titulo }}"> 

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded"
    placeholder="director" name="director" value="{{ $pelicula->director }}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded"
    placeholder="genero" name="genero" value="{{ $pelicula->genero }}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded"
    placeholder="precio" name="precio" value="{{ $pelicula->precio }}">

    <button type="submit" class="my-3 w-full bg-green-500@ p-2 font-semibold
    rounded text-white hover: bg-green-600">Enviar</button>

</form>

@endsection