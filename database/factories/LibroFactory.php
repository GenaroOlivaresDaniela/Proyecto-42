<?php

namespace Database\Factories;

use App\Models\categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'titulo_libro' => fake()->name(),
            'nombre_autor' => fake()->name(),
            'categoria_id' => categoria::all()->random()->id
        ];
    }
}
