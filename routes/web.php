<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/vitrines', function () {
    return view('vitrines.pages.index');
})->name('vitrines');

Route::get('/app', function () {
    return view('vitrines.layouts.app');
})->name('app');

Route::get('/shop', function () {
    return view('vitrines.layouts.shop');
})->name('shop');

Route::get('/contact', function () {
    return view('vitrines.layouts.contact');
})->name('contact');

Route::get('/detail', function () {
    return view('vitrines.layouts.detail');
})->name('detail');

Route::get('/shoppingCart', function () {
    return view('vitrines.layouts.shoppingCart');
})->name('shoppingCart');

Route::get('/checkout', function () {
    return view('vitrines.layouts.checkout');
})->name('checkout');

Route::get('/connexion', function () {
    return view('vitrines.layouts.connexion');
})->name('connexion');

Route::get('/categoryLevel1', function () {
    return view('vitrines.layouts.categoryLevel1');
})->name('categoryLevel1');
Route::get('/categoryLevel2', function () {
    return view('vitrines.layouts.categoryLevel2');
})->name('categoryLevel2');
Route::get('/categoryLevel3', function () {
    return view('vitrines.layouts.categoryLevel3');
})->name('categoryLevel3');
