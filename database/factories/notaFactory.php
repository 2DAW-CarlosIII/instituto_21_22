<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class notaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1,10),
            'materia_id' => $this->faker->numberBetween(1,10),
            'evaluacion' => $this->faker->numberBetween(1,3),
            'notas' => $this->faker->numberBetween(0,10)
        ];
    }
}
