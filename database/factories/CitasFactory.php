<?php

namespace Database\Factories;

use App\Models\Especialistas;
use App\Models\Pacientes;
use App\Models\Servicios;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Citas>
 */
class CitasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fecha_hora' => $this->faker->dateTime(),
            //declaramos la llaves foraneas
            'especialistas_id' =>Especialistas::inRandomOrder()->first()->id,
            'pacientes_id' =>Pacientes::inRandomOrder()->first()->id,
            'servicios_id' =>Servicios::inRandomOrder()->first()->id,
        
        ];
    }
}
