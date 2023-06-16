<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
<<<<<<< HEAD

=======
>>>>>>> 834f2602302a3ec95f5fdef1ba697f8d22d28f00
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
<<<<<<< HEAD
        schema::defaultStringLength(191);
=======
        Schema::defaultStringLength(191);
>>>>>>> 834f2602302a3ec95f5fdef1ba697f8d22d28f00
    }
}
