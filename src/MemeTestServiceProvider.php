<?php

namespace Jesteban19\MemeTest;

use Illuminate\Support\ServiceProvider;

class MemeTestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make(\Jesteban19\MemeTest\Http\Controllers\MemeTestController::class);
    }
}
