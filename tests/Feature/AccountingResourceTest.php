<?php

declare(strict_types=1);

use PlentyOne\Api\PlentyOne;
use PlentyOne\Api\Requests\Accounting\GetAccountingLocation;
use PlentyOne\Api\Requests\Accounting\ListRevenueAccountConfigurations;
use PlentyOne\Api\Tests\Helpers\OpenApiExamples;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

it('returns response matching openapi example for list revenue account configurations', function (): void {
    $example = OpenApiExamples::getExampleByPathAndMethod(
        '/rest/accounting/locations/revenue_account_configurations',
        'GET'
    );
    expect($example)->not->toBeNull();
    expect($example)->toHaveKeys(['page', 'totalsCount', 'isLastPage', 'entries', 'lastPageNumber']);
    $mock = new MockClient([
        ListRevenueAccountConfigurations::class => MockResponse::make(body: $example, status: 200),
    ]);
    $connector = new PlentyOne('client-id', 'client-secret');
    $connector->withMockClient($mock);
    $response = $connector->accounting()->listRevenueAccountConfigurations();
    expect($response->successful())->toBeTrue();
    expect($response->json())->toEqual($example);
});

it('returns response matching openapi example for get accounting location', function (): void {
    $example = OpenApiExamples::getExampleByPathAndMethod(
        '/rest/accounting/locations/{locationId}',
        'GET'
    );
    expect($example)->not->toBeNull();
    expect($example)->toHaveKeys(['name', 'clientId', 'countryId', 'plentyId']);
    $mock = new MockClient([
        GetAccountingLocation::class => MockResponse::make(body: $example, status: 200),
    ]);
    $connector = new PlentyOne('client-id', 'client-secret');
    $connector->withMockClient($mock);
    $response = $connector->accounting()->getAccountingLocation(1);
    expect($response->successful())->toBeTrue();
    expect($response->json())->toEqual($example);
});

it('uses openapi example from spec for accounting endpoints', function (): void {
    $accountingExamples = OpenApiExamples::forAccounting();
    expect($accountingExamples)->not->toBeEmpty();
    $first = $accountingExamples[0];
    expect($first['example'])->toBeArray();
    if ($first['path'] === '/rest/accounting/locations/revenue_account_configurations' && $first['method'] === 'GET') {
        expect($first['example'])->toHaveKeys(['page', 'totalsCount', 'isLastPage', 'entries', 'lastPageNumber']);
    }
})->group('openapi-examples');
