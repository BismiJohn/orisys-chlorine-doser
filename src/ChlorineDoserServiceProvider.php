<?php

namespace Orisys\ChlorineDoser;

use Illuminate\Support\ServiceProvider;

class ChlorineDoserServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register your services, API routes, etc.
    }

    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        // Load views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'chlorine-doser');
    }
}

