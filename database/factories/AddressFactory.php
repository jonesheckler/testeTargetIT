<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'logradouro' => $this->faker->streetName,
            'bairro' => $this->faker->citySuffix,
            'complemento' => $this->faker->secondaryAddress,
            'cep' => $this->faker->postcode,
            'user_id' => $this->faker->unique()->numberBetween(1,12),
        ];
    }
}
