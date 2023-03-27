<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\About_us;
use App\Models\AboutUS;
use App\Models\OrganizMember;
use App\Models\board_of_adviser;
use App\Models\board_of_director;
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
        //about
        // $about_us = AboutUS::all();
        // View()->share ('about_us', $about_us);


        // //adviser
        // $board_of_adviser = board_of_adviser::all();
        // View()->share ('board_of_adviser', $board_of_adviser);



    }
}
