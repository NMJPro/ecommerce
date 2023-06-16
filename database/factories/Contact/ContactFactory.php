<?php

namespace Database\Factories\Contact;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Contact\Contact;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'lastname' => $this->faker->name(),
            'firstname' => $this->faker->name(),
            'description'=>$this->faker->paragraph(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->unique()->numerify('6########'),
            'profile_photo_path' => null,
        ];
    }
}
