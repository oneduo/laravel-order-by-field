<?php

namespace Oneduo\LaravelOrderByField\Tests;

use Mockery as m;
use Oneduo\LaravelOrderByField\LaravelOrderByFieldServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function tearDown(): void
    {
        m::close();
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelOrderByFieldServiceProvider::class,
        ];
    }
}
