<?php

namespace AhmedHelalAhmed\LaravelRoutes;

use Illuminate\Support\ServiceProvider;

/**
 * Class LaravelRoutesProvider
 * @package AhmedHelalAhmed\LaravelRoutes
 * @author Ahmed Helal Ahmed
 */
class LaravelRoutesProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'pages');
    }
}
