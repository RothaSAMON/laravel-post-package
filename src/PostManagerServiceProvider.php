<?php

namespace Blogify\PostManager;

use Illuminate\Support\ServiceProvider;

class PostManagerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/routes/backpack/custom.php');

        // Load views
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'post-manager');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        // Publish assets
        $this->publishes([
            __DIR__ . '/resources/views' => resource_path('views/vendor/post-manager'),
        ], 'post-manager-views');

        $this->publishes([
            __DIR__ . '/database/migrations' => database_path('migrations'),
        ], 'post-manager-migrations');
    }

    public function register()
    {
        // Register any bindings or services
    }
}