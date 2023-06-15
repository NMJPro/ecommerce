<?php

namespace Database\Factories\Category;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category\CategoryLevel2>
 */
class CategoryLevel2Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->sentence(2, true);
        return [
            'title' => $name, 
            'slug' => Str::slug($name), 
            'description' => $this->faker->paragraph(),
        ];
    }
}
