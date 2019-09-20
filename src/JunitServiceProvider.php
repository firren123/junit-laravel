<?php

namespace Firren\JunitLaravel;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class JunitServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {

        $this->registerRoutes();

        $this->loadViewsFrom(
            __DIR__.'/../resources/views', 'junit'
        );
    }

    /**
     * Register the package routes.
     *
     * @return void
     */
    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/Http/routes.php');
        });
    }

    /**
     * Get the Telescope route group configuration array.
     *
     * @return array
     */
    private function routeConfiguration()
    {
        return [
            'namespace' => 'Firren\JunitLaravel\Http\Controllers',
            'prefix' => 'junit',
        ];
    }

}
