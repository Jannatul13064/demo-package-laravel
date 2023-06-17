<?php

namespace webfool\user\Providers;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // $this->app->make('webfool\user\Controllers\user\UserController');
        $this->app->make('webfool\user\Controllers\user\UserController');
        $this->loadViewsFrom(realpath(__DIR__.'/../view'),'user');
        // $this->loadViewsFrom(realpath(__DIR__.'/../view'),'userservice');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        include realpath(__DIR__ . '/../routes/Routes.php');
    }
}
