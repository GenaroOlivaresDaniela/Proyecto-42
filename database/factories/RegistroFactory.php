<?php

namespace Database\Factories;


use App\Models\libro;
use App\Models\usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\registro>
 */
class RegistroFactory extends Factory
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
             'fecha_prest' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'fecha_devol' =>fake()->date($format = 'Y-m-d', $max = 'now'),
            'dias_pres' => fake()->randomDigit(2,10),
            'usuario_id' => usuario::all()->random()->id,
            'libro_id' => libro::all()->random()->id
        ];
    }
}
