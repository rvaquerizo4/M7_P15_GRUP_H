@extends('layouts.main-layout')
@section('page-title', 'Crear')
@section('content')

<form action="{{ route('store') }}" method="POST"
    class="bg-white w-1/3 p-4 border-gray-10@ shadow-xl rounded-lg">
    @csrf

    <h2 class="text-2xl text-center py-4 mb-4 font-semibold">Create Peliculas</h2>

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded"
    placeholder="Titulo" name="titulo"> 

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded"
    placeholder="director" name="director">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded"
    placeholder="genero" name="genero">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded"
    placeholder="precio" name="precio">

    <button type="submit" class="my-3 w-full bg-blue-500@ p-2 font-semibold
    rounded text-white hover: bg-blue-600">Enviar</button>

</form>

@endsection