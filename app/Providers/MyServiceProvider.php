<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->bind('App\Classes\MyGoodClass', function ($app) {

           $instance = new \App\Classes\MyGoodClass();
           $instance->incCounter();
           return $instance;
//           return new App\Classes\MyGoodClass;
       });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
