<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema; 
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // 👇 Fix for "Specified key was too long" error
        Schema::defaultStringLength(191);  

        // 👇 Redirect HTTP to HTTPS if enabled in .env
        if (env('REDIRECT_HTTPS')) {
            URL::forceScheme('https');
        }
    }
}
