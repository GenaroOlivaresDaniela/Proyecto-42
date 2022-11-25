<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\categoria;
use App\Models\carrera;
use App\Models\cuatrimestre;
use App\Models\typeuser;
use App\Models\libro;
use App\Models\usuario;
use App\Models\registro;
use App\Models\libroregistro;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        categoria::factory(20)->create();
        carrera::factory(20)->create();
        cuatrimestre::factory(20)->create();
        typeuser::factory(20)->create();
        libro::factory(20)->create();
        usuario::factory(20)->create();
        registro::factory(20)->create();
        libroregistro::factory(20)->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
