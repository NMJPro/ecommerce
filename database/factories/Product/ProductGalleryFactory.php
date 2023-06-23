<?php

namespace Database\Factories\category;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product\ProductGallery>
 */
class ProductGalleryFactory extends Factory
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
    
            'path' => $this->faker->sentence(),
            'rootpath' => $this->faker->sentence(), 
            'size' => $this->faker->randomNumber(),
        
            'res' => $this->faker->sentence(),
        ];
    }
}
