<?php

declare(strict_types=1);

use PlentyOne\Api\PlentyOne;

it('resolves base url', function (): void {
    $connector = new PlentyOne('client-id', 'client-secret');
    expect($connector->resolveBaseUrl())->toBe('https://example.com/');
});

it('exposes accounting resource', function (): void {
    $connector = new PlentyOne('client-id', 'client-secret');
    $resource = $connector->accounting();
    expect($resource)->toBeInstanceOf(\PlentyOne\Api\Resource\Accounting::class);
});
