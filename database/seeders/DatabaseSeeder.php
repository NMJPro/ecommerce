<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\category\{Level2 , Level1, Level3};
use App\Models\produit\{Cart,Product , ProductGallery};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    
public function run()
{
    
    Product::factory()->count(10)->create(); 
    $ids = range(1, 10); 
    Cart::factory()->count(40)->create()->each(function ($cart) use($ids) {  shuffle($ids);        
     $cart->products()->attach(array_slice($ids, 0, rand(1, 4))); });





    Level1::factory()
    ->has(
        Level2::factory()
        ->has(
            
            Level3::factory()
            
                ->has( Product::factory() 
                    
                    ->has(

                        ProductGallery::factory() 
                        ->count(4) )
                    ->count(4)) 
            ->count(4)
            
        )
        ->count(4)
    )
    ->count(10)
    ->create();
   
 

   
}


}
