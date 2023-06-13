<?php

namespace Database\Factories\Categories\Level1;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categories\Level1\CategoryLevel1>
 */
class CategoryLevel1Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(2, true), 
            'description' => $this->faker->paragraph(),
        ];
    }
}
