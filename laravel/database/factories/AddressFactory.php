<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    { 
        return [ 
            "address_type" => $this->faker->citySuffix(),
            "address" => $this->faker->streetName(),
            "number" => $this->faker->numerify(),
            "district" => $this->faker->streetSuffix(),
            "postal_code" => $this->faker->postcode(),
            "city" => $this->faker->city(),
            "state" => $this->faker->country(),
        ];
    }
}
