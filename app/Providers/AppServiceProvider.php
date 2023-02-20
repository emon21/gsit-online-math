<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\About_us;

use App\Providers\View;
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
        // $about_us = About_us::all();
        // View()->share ('about_us', $about_us);

    }
}
