<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class FramgiaServiceProvider extends ServiceProvider
{
    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     *
     * @return void
     */

    public function register()
    {
        App::bind('framgia_util', function () {
            return new \App\Helpers\FramgiaUtil;
        });
    }
}