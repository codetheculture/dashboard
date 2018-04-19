<?php

namespace Culture\Dashboard;

use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'dashboard');

        $this->publishes([
            __DIR__ . '/../config/dashboard.php' => config_path('dashboard.php'),
            __DIR__ . '/../resources/views' => $this->app->basePath('resources/views/vendor/culture/dashboard'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
