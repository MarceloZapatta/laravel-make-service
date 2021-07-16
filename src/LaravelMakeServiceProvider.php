<?php

namespace Spatie\MediaLibrary;

use Illuminate\Support\ServiceProvider;
use Zapatta\Console\Commands\MakeService;

class LaravelMakeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeService::class
            ]);
        }
    }
}
