<?php

namespace Database\Factories;

use App\Models\carrera;
use App\Models\cuatrimestre;
use App\Models\typeuser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\usuario>
 */
class UsuarioFactory extends Factory
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
            'nombre_completo' =>fake()->name(),
            'telefono' =>fake()->tollFreePhoneNumber(),
            'matricula' =>fake()->numberBetween(222111000),
            'correo' =>fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            
            'contraseña' =>  'sfkerngji34p593045i2594gr89g48yh44853*/',
            'img_perfil' => $this->faker->imageUrl(),
            'carrera_id' => carrera::all()->random()->id,
            'type_id' => typeuser::all()->random()->id,
            'cuatri_id' => cuatrimestre::all()->random()->id,
            'remember_token' => Str::random(10)
        ];
    }
     /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
