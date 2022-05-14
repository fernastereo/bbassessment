<?php

namespace Database\Factories;

use App\Models\Municipality;
use Illuminate\Database\Eloquent\Factories\Factory;

class ZipcodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'zip_code' => $this->faker->randomNumber($nbDigits = 5, $strict = false),
            'locality' => $this->faker->name(),
            'municipality_id' => Municipality::factory(),
        ];
    }
}
