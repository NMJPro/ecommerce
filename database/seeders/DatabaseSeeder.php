<?php

namespace Database\Seeders;

<<<<<<< HEAD
use Illuminate\Database\Seeder;

=======
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category\{CategoryLevel1, CategoryLevel2, CategoryLevel3};
use App\Models\User;
>>>>>>> dd23b9601f41037d8ff38f03cba3bf256a702559

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
<<<<<<< HEAD
    
public function run()
{
 
   
}


=======
    public function run(): void
    {
        User::factory(10)->create();
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
>>>>>>> dd23b9601f41037d8ff38f03cba3bf256a702559
}
