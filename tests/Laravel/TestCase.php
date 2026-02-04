<?php

declare(strict_types=1);

namespace PlentyOne\Api\Tests\Laravel;

use Orchestra\Testbench\TestCase as Orchestra;
use PlentyOne\Api\Laravel\PlentyOneServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            PlentyOneServiceProvider::class,
        ];
    }

    protected function defineEnvironment($app): void
    {
        $app['config']->set('plentyone.base_url', 'https://api.example.com');
        $app['config']->set('plentyone.client_id', 'test-client-id');
        $app['config']->set('plentyone.client_secret', 'test-client-secret');
    }
}
