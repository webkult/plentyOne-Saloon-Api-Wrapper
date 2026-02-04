<?php

declare(strict_types=1);

namespace PlentyOne\Api\Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;
use PlentyOne\Api\PlentyOne;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

abstract class TestCase extends BaseTestCase
{
    protected function plentyOne(string $clientId = 'client-id', string $clientSecret = 'client-secret'): PlentyOne
    {
        return new PlentyOne($clientId, $clientSecret);
    }

    protected function mockClient(array $mocks): MockClient
    {
        return new MockClient($mocks);
    }

    protected function mockResponse(array $body, int $status = 200): MockResponse
    {
        return MockResponse::make(body: $body, status: $status);
    }
}
