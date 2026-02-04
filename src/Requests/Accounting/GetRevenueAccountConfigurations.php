<?php

declare(strict_types=1);

namespace PlentyOne\Api\Requests\Accounting;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetRevenueAccountConfigurations extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/rest/accounting/locations/revenue_account_configurations';
    }
}
