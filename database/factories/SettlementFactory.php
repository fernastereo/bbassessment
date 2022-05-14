<?php

namespace Database\Factories;

use App\Models\Settlementtype;
use App\Models\Zipcode;
use Illuminate\Database\Eloquent\Factories\Factory;

class SettlementFactory extends Factory
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
            'zone_type' => $this->faker->word(),
            'settlementtype_id' => Settlementtype::factory(),
            'zipcode_id' => Zipcode::factory()
        ];
    }
}
