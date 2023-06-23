<?php

namespace Database\Factories\category;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(2, true),
            
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
