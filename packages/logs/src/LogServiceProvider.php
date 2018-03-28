<?php

namespace voidnoble\Logs;

use Illuminate\Support\ServiceProvider;

class LogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ ."/Http/routes.php");
        $this->loadMigrationsFrom(__DIR__ ."migrations");
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Logs::class, function () {
            return new Logs();
        });

        $this->app->alias(Logs::class, 'logs');
    }
}
