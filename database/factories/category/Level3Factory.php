<?php

namespace Database\Factories\category;

use Illuminate\Database\Eloquent\Factories\Factory;

class Level3Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(2, true),
        
            'description' => $this->faker->paragraph(),
        ];
    }
}
