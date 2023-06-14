<?php

namespace Database\Factories\category;

use Illuminate\Database\Eloquent\Factories\Factory;

class CartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'is completed' => $this->faker->randomNumber()
        ];
    }
}
