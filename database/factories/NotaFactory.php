<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'evaluacion' => $this->faker->numberBetween(1, 3),
            'nota' => $this->faker->numberBetween(0, 10)
        ];
    }
}
