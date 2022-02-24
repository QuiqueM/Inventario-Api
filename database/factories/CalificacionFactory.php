<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CalificacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sumatoria_calificacion' => $this->faker->numberBetween(1, 5),
            'numero_calificaciones' => 1
        ];
    }
}
