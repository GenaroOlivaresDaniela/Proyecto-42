<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cuatrimestre>
 */
class CuatrimestreFactory extends Factory
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
            'cuatrimestre' => fake()->randomElement(['primero', 'segundo', 'tercero', 'cuarto', 'quinto'])

        ];
    }
}
