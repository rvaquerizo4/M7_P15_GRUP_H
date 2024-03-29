<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', 'App\Http\Controllers\MainController@arrel') -> name('entrada');

Route::get('/peliculas', [PeliculaController::class, 'index']) -> name('pelicula');

Route::get('/peliculas/create', [PeliculaController::class, 'create']) -> name('create');

Route::post('/peliculas/store', [PeliculaController::class, 'store']) -> name('store');

Route::get('/peliculas/{pelicula}/edit', [PeliculaController::class, 'edit'])->name('pelicula.edit');

Route::put('/peliculas/{id}', [PeliculaController::class, 'update'])->name('pelicula.update');

Route::delete('/peliculas/{id}', [PeliculaController::class, 'destroy'])->name('pelicula.destroy');

