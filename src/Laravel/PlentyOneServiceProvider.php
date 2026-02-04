<?php

declare(strict_types=1);

namespace PlentyOne\Api\Laravel;

use Illuminate\Support\ServiceProvider;
use PlentyOne\Api\PlentyOne;

class PlentyOneServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/plentyone.php',
            'plentyone'
        );

        $this->app->singleton(PlentyOne::class, function (): PlentyOne {
            return new PlentyOneLaravel(
                (string) config('plentyone.client_id'),
                (string) config('plentyone.client_secret'),
                config('plentyone.authorization_url') ? (string) config('plentyone.authorization_url') : null,
                config('plentyone.token_url') ? (string) config('plentyone.token_url') : null,
                config('plentyone.refresh_url') ? (string) config('plentyone.refresh_url') : null,
                config('plentyone.scopes', []),
                (string) config('plentyone.base_url', 'https://example.com'),
            );
        });
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../config/plentyone.php' => config_path('plentyone.php'),
            ], 'plentyone-config');
        }
    }
}
