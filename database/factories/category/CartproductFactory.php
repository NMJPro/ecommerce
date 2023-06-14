<?php

namespace Database\Factories\category;

use Illuminate\Database\Eloquent\Factories\Factory;

class CartproductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quantity' => $this->faker->randomNumber()
        ];
    }
}
