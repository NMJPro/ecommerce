<?php

namespace Database\Factories\category;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(2, true),
            'level3_id'=> $this->faker->randomNumber(),
            'description' => $this->faker->paragraph(),
            'quantity' => $this->faker->randomNumber(),  
            'price' => $this->faker->randomNumber(),
            'remise' => $this->faker->randomNumber(),
            'sku' => $this->faker->sentence(),
            'garanty' => $this->faker->sentence(),
            'specificity' => $this->faker->sentence(),
        ];
    }
}


