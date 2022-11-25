<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Citas;
use App\Models\Especialistas;
use App\Models\Pacientes;
use App\Models\Servicios;
use App\Models\Usuarios;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\Usuarios::factory(12)->create();
        \App\Models\Especialistas::factory(12)->create();
        \App\Models\Servicios::factory(12)->create();
        \App\Models\Pacientes::factory(12)->create();
        \App\Models\Citas::factory(12)->create();
    }
}
