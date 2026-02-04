<?php

declare(strict_types=1);

it('has valid structure for each openapi response example', function (string $path, string $method, array $example): void {
    expect($path)->toBeString();
    expect($method)->toBeString();
    expect($example)->toBeArray();
})->with('openapi_examples');
