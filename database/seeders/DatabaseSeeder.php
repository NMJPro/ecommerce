<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories\Level1\CategoryLevel1;
use App\Models\Categories\Level2\CategoryLevel2;
use App\Models\Categories\Level3\CategoryLevel3;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        CategoryLevel1::factory(10)->create();
        CategoryLevel2::factory(10)->create();
        CategoryLevel3::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
