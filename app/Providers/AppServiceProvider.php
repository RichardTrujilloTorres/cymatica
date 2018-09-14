<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('isProduction', function () {
            $env = env('APP_ENV', 'production');

            return (boolean) ($env === 'production');
        });

        Blade::if('isLocal', function () {
            $env = env('APP_ENV', 'production');

            return (boolean) ($env === 'local');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
