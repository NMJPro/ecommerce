<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Contact\Contact;
use App\Models\Category\{CategoryLevel1, CategoryLevel2, CategoryLevel3,Product,ProductGallery};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        User::factory(10)->create();
        Contact::factory(10)->create();
        CategoryLevel1::factory()
        ->has(
            CategoryLevel2::factory()
            ->has(
                CategoryLevel3::factory()->count(4)
            )
            ->count(4)
        )
        ->count(10)
        ->create();
    }
}
