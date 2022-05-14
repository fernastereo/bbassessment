<?php

namespace Database\Factories;

use App\Models\Federal_entity;
use Illuminate\Database\Eloquent\Factories\Factory;

class MunicipalityFactory extends Factory
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
            'federal_entity_id' => Federal_entity::factory(),
        ];
    }
}
