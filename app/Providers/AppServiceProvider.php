<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//this line below should be added in the latest laravel
use Illuminate\Support\Facades\Schema;

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
          //this string should be added in laravel 5++ and the facade
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
            if(config('app.env') === 'production') {
                \URL::forceScheme('https');
        }

    }

}
