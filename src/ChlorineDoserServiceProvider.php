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
        // Load routes, migrations, views, etc.
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'chlorine-doser');
    }
}
