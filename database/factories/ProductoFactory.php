<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * Definimos la estructura pa el registro de productos
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sku' => $this->faker->uuid(),
            'nombre' => $this->faker->words(3, true),
            'descripcion' => $this->faker->paragraph(2),
            'precio' => $this->faker->randomFloat(2, 1, 1000),
            'cantidad' => $this->faker->randomDigitNot(0),
            'estado' => true
        ];
    }
}
