<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoryLevel1;
use App\Models\CategoryLevel2;
use App\Models\CategoryLevel3;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        CategoryLevel1::factory()
        ->has(
            CategoryLevel2::factory()
            ->has(
                CategoryLevel3::factory()
                ->count(4))
            ->count(4))
        ->count(10)
        ->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
