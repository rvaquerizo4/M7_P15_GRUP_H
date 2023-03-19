@extends('layouts.main-layout')
@section('page-title', 'Bienvenidos al cine')
@section('content')
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

  <table class="table-fixed w-full">
    <thead>
      <tr class="bg-indigo-500 text-white">
        <th class="w-20 py-4 ...">ID</th>
        <th class="w-1/8 py-4 ...">Titulo</th>
        <th class="w-1/16 py-4 ...">director</th>
        <th class="w-1/16 py-4 ...">genero</th>
        <th class="w-1/16 py-4 ...">precio</th>
        <th class="w-28 py-4 ...">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($peliculas as $row)
      <tr>
        <td class="py-3 px-6">{{ $row -> id }}</td>
        <td class="p-3 text-center">{{ $row -> titulo }}</td>
        <td class="p-3 text-center">{{ $row -> director }}</td>
        <td class="p-3 text-center">{{ $row -> genero }}</td>
        <td class="p-3 text-center">{{ $row -> precio }}</td>
        <td class="p-3 flex justify-center">
          <form action="{{ route('pelicula.destroy', $row->id) }}" method="POST">
            @csrf
            @method('delete')
            <button class="bg-red-500 text-white px-3 py-1 rounded-sm mx-1">
              <i class="fas fa-trash"></i></button>
          </form>

          <a href="{{ route('pelicula.edit', $row->id) }}" class="bg-green-500 text-white px-3 py-1 rounded-sm">
            <i class="fas fa-pen"></i></a>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>

@endsection