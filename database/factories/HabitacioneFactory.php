<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HabitacioneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'numero' => $this->faker->numberBetween(1, 167),
            'tipo' => $this->faker->randomElement($array = array ('Individual','Doble','Suite', 'Familiar', 'Ejecutiva')),
            'precio' => $this->faker->numerify('USD ###')
        ];
    }
}
