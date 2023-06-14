<?php

namespace Database\Factories\produit;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductGalleryFactory extends Factory
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
    
            'path' => $this->faker->sentence(),
            'rootpath' => $this->faker->sentence(), 
            'size' => $this->faker->randomNumber(),
        
            'res' => $this->faker->sentence(),
           
        ];
    }
}
