<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category\{CategoryLevel1, CategoryLevel2, CategoryLevel3};
use App\Models\User;
use App\Models\Contacts\Contacts;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Contacts::factory(10)->create();
        CategoryLevel1::factory()
        ->has(
            CategoryLevel2::factory()
            ->has(
                CategoryLevel3::factory()
                ->count(4))
            ->count(4))
        ->count(10)
        ->create();
    }
}
