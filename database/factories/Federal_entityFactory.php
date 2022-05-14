<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Federal_entityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'key' => $this->faker->randomDigit(),
            'name' => $this->faker->name(),
            'code' => $this->faker->randomDigit(),
        ];
    }
}
