<?php

namespace Aldhix\Adminlte;

use Illuminate\Support\ServiceProvider as Service;

class ServiceProvider extends Service
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->publishes([
            __DIR__.'/views' => resource_path('/views'),
            __DIR__.'/public' => public_path('/'),
        ]);
    }
}