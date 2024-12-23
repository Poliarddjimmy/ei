<?php

namespace App\Providers;
use Brian2694\Toastr\Facades\Toastr;

use Illuminate\Support\ServiceProvider;

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
        Toastr::useVite();
        error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);
    }
}
