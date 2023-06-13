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
    
    Route::get('statsventes', function () {
        return view('dashboard.template.pages.charts.statsventes');
    })->name('statsventes');
    
    Route::get('utilisateurs', function () {
        return view('dashboard.template.pages.charts.utilisateurs');
    })->name('utilisateurs');
    
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


