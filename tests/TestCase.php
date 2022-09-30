<?php

namespace Lecano\Spanish\Tests;

use Illuminate\Support\Facades\Artisan;
use Lecano\Spanish\SpanishServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
        $this->app['config']->set('app.locale', 'es');
        Artisan::call('spanish:install');
    }

    protected function getPackageProviders($app)
    {
        return [
            SpanishServiceProvider::class,
        ];
    }
}
