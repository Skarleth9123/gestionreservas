<?php

namespace Database\Factories;

use App\Models\Habitacione;
use App\Models\Huespede;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fecha_entrada' => $this->faker->dateTimeBetween('-2 weeks', '+2 months'),
            'fecha_salida' => $this->faker->dateTimeBetween($this->faker->dateTimeBetween('-1 weeks', '+1 months'), '+3 months'),
            'habitacione_id' => Habitacione::all()->random()->id,
            'huespede_id' => Huespede::all()->random()->id,
            'numero_de_huespedes' => $this->faker->numberBetween(1, 4),
        ];
    }
}
