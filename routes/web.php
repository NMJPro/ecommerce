<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Level1Controller;
use App\Http\Controllers\Level2Controller;
use App\Http\Controllers\Level3Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductGalleryController;
use App\Http\Controllers\CartController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/admin', function () {
    return view('dashboard.pages.index');
})->name('admin');


Route::resource('produit/product', ProductController::class, ['as' =>'produit']);
Route::resource('produit/cart', CartController::class, ['as' =>'produit']);
Route::resource('produit/productgallery', ProductGalleryController::class, ['as' =>'produit']);



Route::resource('category/level1', Level1Controller::class, ['as' =>'category']);

Route::controller(Level1Controller::class)->group(function () {
    Route::delete('category/level1/force/{level1}', 'forceDestroy')->name('category.level1.force.destroy');
    Route::put('category/level1/restore/{level1}', 'restore')->name('category.level1.restore');
    });
   
     

Route::resource('category/level2', Level2Controller::class, ['as' =>'category']);

    Route::controller(Level2Controller::class)->group(function () {
        
        Route::get('category/level1/{title}/category/level2', 'index')->name('category.level2.level1');
        });
            Route::controller(Level2Controller::class)->group(function () {
            Route::delete('category/level2/force/{level2}', 'forceDestroy')->name('category.level2.force.destroy');
            Route::put('category/level2/restore/{level2}', 'restore')->name('category.level2.restore');
            });


                Route::resource('category/level3', Level3Controller::class, ['as' =>'category']);

                Route::controller(Level3Controller::class)->group(function () {
                 
                 Route::get('category/level2/{title}/category/level3', 'index')->name('category.level3.level2');
                 });
                 Route::controller(Level3Controller::class)->group(function () {
                Route::delete('category/level3/force/{level3}', 'forceDestroy')->name('category.level3.force.destroy');
                 Route::put('category/level3/restore/{level3}', 'restore')->name('category.level3.restore');
                     });
         


