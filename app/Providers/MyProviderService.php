<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MyProviderService extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
//        var_dump('register');//aval register bad boot
        //$this->app('hash');
        //App::make('hash');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
//          var_dump('boot');//aval register bad boot
//        Event::listen('Email');
    }
}
