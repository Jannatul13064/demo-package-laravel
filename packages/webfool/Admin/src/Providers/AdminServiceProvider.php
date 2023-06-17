<?php

namespace webfool\admin\Providers;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{



    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->make(\webfool\admin\Controllers\admin\AdminController::class);
        $this->loadViewsFrom(realpath(__DIR__.'/../view'),'admin');
        // $this->loadViewsFrom(realpath(__DIR__.'/../view'),'adminservice');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
       include realpath(__DIR__ . '/../Routes/Routes.php');
    }
}