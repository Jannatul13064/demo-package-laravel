<?php

namespace webfool\calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->make('webfool\calculator\CalculatorController');
        $this->loadViewsFrom(__DIR__.'/view','calculator');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        include __DIR__.'/Routes.php';
    }
}