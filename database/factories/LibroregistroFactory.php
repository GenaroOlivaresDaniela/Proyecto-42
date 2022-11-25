<?php

namespace Database\Factories;

use App\Models\libro;
use App\Models\registro;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\libroregistro>
 */
class LibroregistroFactory extends Factory
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
            'libro_id' => libro::all()->random()->id,
            'registro_id' =>registro::all()->random()->id
        ];
    }
}
