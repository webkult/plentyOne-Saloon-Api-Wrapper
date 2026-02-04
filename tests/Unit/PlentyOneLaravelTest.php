<?php

declare(strict_types=1);

use PlentyOne\Api\Laravel\PlentyOneLaravel;

it('resolves base url from configured value', function (): void {
    $connector = new PlentyOneLaravel('client-id', 'client-secret', null, null, null, [], 'https://api.plentymarkets.com');
    expect($connector->resolveBaseUrl())->toBe('https://api.plentymarkets.com/');
});

it('strips trailing slash from base url then appends one', function (): void {
    $connector = new PlentyOneLaravel('client-id', 'client-secret', null, null, null, [], 'https://example.com/');
    expect($connector->resolveBaseUrl())->toBe('https://example.com/');
});
