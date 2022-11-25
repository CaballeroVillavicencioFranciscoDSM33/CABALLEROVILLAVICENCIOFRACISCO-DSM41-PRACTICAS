<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pacientes>
 */
class PacientesFactory extends Factory
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
            'fecha_nacimiento' => $this->faker->date(),
            'edad' => $this->faker->randomDigit(10),
            'sexo' => $this->faker->text(10),
            'domicilio' => $this->faker->text(10),
            'codigo_postal' => $this->faker->text(10),
            'escolaridad' => $this->faker->text(10),
            'ocupacion' => $this->faker->text(10),
            'religion' => $this->faker->text(10),
            'estado_civil' => $this->faker->text(10),
            'telefono' => $this->faker->phoneNumber(10),
            'alergias' => $this->faker->text(10),
            //declaramos la llaves foraneas
           
        ];
    }
}
