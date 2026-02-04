<?php

declare(strict_types=1);

use PlentyOne\Api\Laravel\PlentyOneLaravel;
use PlentyOne\Api\PlentyOne;

it('registers PlentyOne as singleton', function (): void {
    $plentyOne = app(PlentyOne::class);
    expect($plentyOne)->toBeInstanceOf(PlentyOneLaravel::class);
});

it('resolves base url from config', function (): void {
    $plentyOne = app(PlentyOne::class);
    expect($plentyOne->resolveBaseUrl())->toBe('https://api.example.com/');
});

it('merges default config', function (): void {
    expect(config('plentyone.client_id'))->toBe('test-client-id');
    expect(config('plentyone.base_url'))->toBe('https://api.example.com');
});

it('registers plentyone-config publish tag', function (): void {
    $this->artisan('vendor:publish', ['--tag' => 'plentyone-config', '--force' => true]);
    expect(file_exists(config_path('plentyone.php')))->toBeTrue();
});
