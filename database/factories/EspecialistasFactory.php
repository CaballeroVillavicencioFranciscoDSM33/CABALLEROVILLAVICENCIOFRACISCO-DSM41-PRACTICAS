<?php

namespace Database\Factories;

use App\Models\Usuarios;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Especialistas>
 */
class EspecialistasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre_completo' => $this->faker->name(),
            'telefono' => $this->faker->phoneNumber(),
            'direccion' => $this->faker->address(),
            'descripcion' => $this->faker->text(10),
            //declaramos la llaves foraneas
            'usuarios_id' =>Usuarios::inRandomOrder()->first()->id,
           
        ];
    }
}
