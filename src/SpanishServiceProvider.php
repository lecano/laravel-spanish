<?php

namespace Lecano\Spanish;

use Illuminate\Support\ServiceProvider;
use Lecano\Spanish\Commands\InstallCommand;

class SpanishServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../resources/lang' => $this->app->langPath(),
        ]);

        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
            ]);
        }
    }

    public function register()
    {
    }
}
