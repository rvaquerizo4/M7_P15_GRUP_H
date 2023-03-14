<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pelicula;
use Faker\Factory as Faker;


class PeliculaFactory extends Factory
{

    protected $model = Pelicula::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create();
        return [
            'titulo' => $faker ->unique()->text(30),
            'director' => $faker ->text(30),
            'genero' => $faker ->text(30),
            'precio' => $faker ->randomFloat(2, 100, 1000)
        ];
    }
}
