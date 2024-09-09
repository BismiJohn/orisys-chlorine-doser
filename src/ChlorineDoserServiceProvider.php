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
        // Load routes, config, etc.
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
}

