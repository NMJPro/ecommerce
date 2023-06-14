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

// admin routes

Route::get('admin', function () {
    return view('dashboard.pages.index');
})->name('admin');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('auth.register');
    })->name('dashboard');


    Route::get('admin', function () {
        return view('dashboard.pages.index');
    })->name('admin');
    
    Route::get('mailbox', function () {
        return view('dashboard.template.pages.mailbox.mailbox');
    })->name('mailbox');
    
    Route::get('compose', function () {
        return view('dashboard.template.pages.mailbox.compose');
    })->name('compose');
    
    Route::get('readmail', function () {
        return view('dashboard.template.pages.mailbox.readmail');
    })->name('readmail');
    
    Route::get('stats/ventes', function () {
        return view('dashboard.template.pages.charts.statsventes');
    })->name('stats.ventes');
    
    Route::get('stats/utilisateurs', function () {
        return view('dashboard.template.pages.charts.utilisateurs');
    })->name('stats.users');
    
    Route::get('galerie', function () {
        return view('dashboard.template.pages.galerie');
    })->name('galerie');
    
    Route::get('facture', function () {
        return view('dashboard.template.pages.examples.facture');
    })->name('facture');
    
    Route::get('factureprint', function () {
        return view('dashboard.template.pages.examples.factureprint');
    })->name('factureprint');
    
    Route::get('contacts', function () {
        return view('dashboard.template.pages.examples.contacts');
    })->name('contacts');
    
    Route::get('contactus', function () {
        return view('dashboard.template.pages.examples.contactus');
    })->name('contactus');
    
    Route::get('faq', function () {
        return view('dashboard.template.pages.examples.faq');
    })->name('faq');
    
    Route::get('profile', function () {
        return view('dashboard.template.pages.examples.profile');
    })->name('profile');
});

/* 
    vitrine route
*/
// page d'acceuil du site
Route::get('/', function () {
    return view('vitrine.pages.index');
})->name('vitrine.index');

// route de listing des produits
Route::get('/shop', function () {
    return view('vitrine.pages.shop');
})->name('vitrine.shop');

// route de filtrage par categorie
Route::get('/{level1}', function () {
    return view('vitrine.pages.shop');
})->name('vitrine.level1');

Route::get('/{level1}/{level2}', function () {
    return view('vitrine.pages.shop');
})->name('vitrine.level2');

Route::get('/{level1}/{level2}/{level3}', function () {
    return view('vitrine.pages.shop');
})->name('vitrine.level3');

// route de contact des utilisateurs
Route::get('/contact', function () {
    return view('vitrines.layouts.contact');
})->name('vitrine.contact');

Route::get('/detail', function () {
    return view('vitrines.layouts.detail');
})->name('vitrine.detail');

Route::get('/cart', function () {
    return view('vitrines.layouts.shoppingCart');
})->name('vitrine.cart');

Route::get('/checkout', function () {
    return view('vitrines.layouts.checkout');
})->name('vitrine.checkout');

