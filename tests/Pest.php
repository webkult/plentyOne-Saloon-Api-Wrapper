<?php

declare(strict_types=1);

use PlentyOne\Api\PlentyOne;
use PlentyOne\Api\Tests\Helpers\OpenApiExamples;

uses()->in('Feature', 'Unit');

beforeEach(function (): void {
    if (function_exists('Saloon\MockConfig::reset')) {
        \Saloon\MockConfig::reset();
    }
});

dataset('openapi_examples', array_map(static fn (array $row): array => [
    $row['path'],
    $row['method'],
    $row['example'],
], OpenApiExamples::load()));
